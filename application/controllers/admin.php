<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {

    private function RenderView($view='landing',$data=array())
    {
        $this->load->view('header');
        $this->load->view($view,$data);
        $this->load->view('footer');
    }

    // TODO: check session state
    private function check_session()
    {
        return true;
    }

    public function index()
    {
        $this->RenderView('admin/login');
    }

    // TODO: logout
    public function logout()
    {
        $this->RenderView('');
    }

    public function registros()
    {
        if( $this->check_session() ) {
            $this->load->model('speaker_list');
            $data['registries'] = $this->speaker_list->all_registries();
            $this->RenderView('all_registries',$data);
        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
