<?php
/**
 * Created by PhpStorm.
 * User: simba
 * Date: 3/14/2016
 * Time: 10:31 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_ctrl   extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user','',TRUE);
    }

    function index()
    {
        $this->load->view('login.php');
    }

    function checkUser() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->user->login($username, $password);
        if($result)
        {
                $sess_array = array(
                    'id' => $result->id,
                    'username' => $result->username,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sess_array);
            redirect('Home', 'location');
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>