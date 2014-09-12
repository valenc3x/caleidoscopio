<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    private function RenderView($view='landing',$data=array())
    {
        $this->load->view('header');
        $this->load->view($view,$data);
        $this->load->view('footer');

    }

    public function index()
    {
        $this->RenderView('landing');
    }

    public function programa()
    {
        $this->RenderView('schedule');
    }

    public function acerca_de()
    {
        $this->RenderView('about');
    }

    public function ponencias()
    {
        $this->load->model('speakers');
        $data['speakers'] = $this->speakers->all_speakers();
        $this->RenderView('speakers',$data);
    }

    public function mesas_de_trabajo()
    {
        $this->load->model('workshops');
        $data['workshops'] = $this->workshops->all_workshops();
        $this->RenderView('workshops',$data);
    }

    public function contacto()
    {
        if ($this->input->post()) {
            $this->load->library('email');
            $this->email->from('codingdiaries@gmail.com', 'Congreso Caleidoscopio');
            $this->email->to('salri.qro@gmail.com');
            $this->email->reply_to($this->input->post('email'), $this->input->post('nombre'));
            $this->email->subject('Contacto - Congreso Caleidoscopio');
            $this->email->message($this->input->post('mensaje'));
            $this->email->send();
            redirect('/');

        }else{
            $this->RenderView('contacto');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
