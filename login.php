<?php

class Login extends CI_Controller
{
    public function index($code)
    {
        // print_r($segment_id);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[100]');
        //$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[100]');


        if ($this->form_validation->run() == false) {

            // $this->load->view('login_simple_views');
            $this->load->view('login_viewtest');
    
        } else
        {
            // Sanitize and validate input & process
            $username = filter_var($_POST['username'],FILTER_SANITIZE_EMAIL);
            $username = filter_var($username,FILTER_VALIDATE_EMAIL);
            $password = filter_var($_POST['password'],FILTER_SANITIZE_EMAIL);

            $credentials = array(
                'username' => $username,
                'password' => $password
                );

                $result = $this->users_model->login_user($credentials);

            if ($result)
            {
                $login_data = array(
                    'username' => $username,
                    'logged_in' => true,
                );

                // Save data in session as well
                $this->session->set_userdata($login_data);

                // if($this->session->has_userdata('logged_in')){
                //     echo "<h2>YES,is logged in</h2>";
                //     print_r($_SESSION);
                //     echo $this->session->userdata('test');
                // } else {
                //     echo "<h2>NO, is NOT logged in</h2>";
                // }
                // die;

                $currPath = 'index.php/'.$this->session->controller.'/'.$this->session->method.'/'. $code; // 'all' is currrent set default
                // $currPath = 'index.php/'.$this->session->controller.'/'.$this->session->method.'/all'; // 'all' is currrent set default
                redirect($currPath);  // Redirect to prevailing URL
            } else
            {
                    die("Invalid login credentials");
            }
        }
    }

    public function logout($code)
    {
        $this->session->sess_destroy();  // destroy session data and redirect
        // redirect(base_url());
        $currPath = 'index.php/'.$this->session->controller.'/'.$this->session->method.'/'.$code; // 'all' is currrent set default
        redirect($currPath);  // Redirect to prevailing URL
    }

}
