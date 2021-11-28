<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{

    /* var $jwt = null; */

    function __construct()
    {
        parent::__construct();
        /* $this->jwt = $this->jsonwebtoken->jwtDecode();
        if ($this->jwt == FALSE) {
            redirect('Welcome');
        }

        if ($this->jwt->app != 'Application') {
            redirect('Welcome');
        }

        if ($this->jwt->level == null) {
            $this->session->set_flashdata('message', 'Hak akses ditolak.');
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Welcome/');
        } */
    }

    function index()
    {
        $data = array(
            'content'       => 'default/content',
            'css'           => 'default/css',
            'javascript'    => 'default/javascript',
            'modal'         => 'default/modal',
        );
        $this->load->view('index', $data);
    }
}
