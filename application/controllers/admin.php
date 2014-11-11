<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    private function RenderView($view='landing',$data=array())
    {
        $this->load->view('header');
        $this->load->view($view,$data);
        $this->load->view('footer');
    }

    // TODO: check session state
    private function check_session()
    {
        return $this->session->userdata('logged_in');
    }

    public function index()
    {
        redirect('admin/login');
    }

    public function login()
    {
        if( $this->input->post() )
        {
            $this->load->model('user');
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $auth = $this->user->login($user, $pass);
            if($auth)
            {
                $sess_array = array(
                    'id' => $auth->id,
                     'username' => $auth->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
                redirect('admin/registros');
            }else{
                $this->RenderView('login');
            }
        } else {
            $this->RenderView('login');

        }
    }

    // TODO: logout
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('/');
    }

    public function registros()
    {
       if( $this->check_session() ) {
           $this->load->model('speakers_list');
           $data['registries'] = $this->speakers_list->all_registries();
           $this->RenderView('all_registries',$data);
       }else{
           redirect('admin/login');
       }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
