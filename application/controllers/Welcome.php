<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{

    /* var $jwt = null; */

    function __construct()
    {
        parent::__construct();
        $this->jwt = $this->jsonwebtoken->jwtDecode();
        if ($this->jwt == FALSE) {
            redirect('Auth/Logout/');
        }

        if ($this->jwt->app != $_ENV['APPLICATION_NAME']) {
            redirect('Auth/Logout/');
        }

        if (!($this->jwt->level == 'DEVELOPMENT' || $this->jwt->level == 'SUPER ADMIN' || $this->jwt->level == 'ADMIN')) {
            $this->session->set_flashdata('message', 'Hak akses ditolak.');
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Welcome/');
        }
    }

    function index()
    {
        $data = array(
            'title' => 'Dashboard | Web Apps',
            'content' => 'default/content',
            'css' => 'default/css',
            'javascript' => 'default/javascript',
            'modal' => 'default/modal',
        );
        $this->load->view('index', $data);
    }
}
