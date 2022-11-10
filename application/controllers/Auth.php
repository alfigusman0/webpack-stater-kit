<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    /* var $jwt = null; */

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = array(
            'title'         => 'Dashboard | Web Apps',
            'content' => 'default/content',
            'css' => 'default/css',
            'javascript' => 'default/javascript',
            'modal' => 'default/modal',
        );
        $this->load->view('index', $data);
    }
}
