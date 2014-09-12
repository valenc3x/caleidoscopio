<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

    private function RenderView($view='landing',$data=array())
    {
        $this->load->view('header');
        $this->load->view($view,$data);
        $this->load->view('footer');
    }

    public function index()
    {
        $this->RenderView('registry');
    }

    public function gracias()
    {
        $this->RenderView('thanks');
    }

    public function ponencias()
    {
        if( $this->input->post() ) {
            $this->load->model('attendants');
            $this->load->model('speaker_registry');
            $this->load->library('form_validation');


            if ( $this->form_validation->run('speakers') === TRUE ){
                $data = $this->input->post();
                $registry_data['speakers'] = $data['speakers'];
                unset($data['speakers']);
                $registry_data['attendant'] = $this->attendants->new_attendant($data);
                $this->speaker_registry->register($registry_data);
                redirect('/registro/gracias');
            } else {
                $this->load->model('speakers');
                $data['speakers'] = $this->speakers->all_speakers();
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>');
                $this->RenderView('speaker_registry',$data);
            }
        } else {
            $this->load->model('speakers');
            $data['speakers'] = $this->speakers->all_speakers();
            $this->RenderView('speaker_registry',$data);
        }
    }

    public function mesas_de_trabajo()
    {
        if ($this->input->post()) {
            $this->load->library('upload');
            $this->load->library('form_validation');
            $this->load->model('attendants');
            $this->load->model('workshop_registry');

            $data = $this->input->post();
            //$this->form_validation->set_rules('speakers[]', 'Ponencias', '');

            if ( $this->form_validation->run('workshops') === TRUE ) {
                    $registry_data['workshops'] = $data['workshops'];
                    unset($data['workshops']);
                    $registry_data['attendant'] = $this->attendants->new_attendant($data);
                    $this->workshop_registry->register($registry_data);
                    redirect('/registro/gracias');
                /*
                if (!$this->upload->do_upload('document')) {
                    $data['file_errors'] =  $this->upload->display_errors();
                    $this->RenderView('workshop_registry',$data);
                } else {
                    $upload_data = $this->upload->data();
                    $filename = $upload_data['file_name'];
                    $data['filename'] = $filename;
                }
                */
            } else {
                $this->load->model('workshops');
                $data['workshops'] = $this->workshops->all_workshops();
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>', '</div>');
                $this->RenderView('workshop_registry',$data);
            }
        }else{
            $this->load->model('workshops');
            $data['workshops'] = $this->workshops->all_workshops();
            $this->RenderView('workshop_registry',$data);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
