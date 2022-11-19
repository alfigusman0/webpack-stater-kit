<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    /* var $jwt = null; */

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbs_users');
    }

    function index()
    {
        $data = array(
            'title'         => 'Dashboard | Web Apps'
        );
        $this->load->view('login', $data);
    }

    function Login()
	{
		$rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
		$rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Auth/');
		} else {
			$rules = array(
				'select'    => null,
				'where'     => array(
					'username' => $this->input->post('username'),
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tbsUsers = $this->Tbs_users->where($rules);
			if ($tbsUsers->num_rows() > 0) {
				$tbsUsers = $tbsUsers->row();
                if(password_verify($this->input->post('password'), $tbsUsers->password)){
                    $data = array(
						'id_jwt_token' 	=> strtotime(date('Y-m-d H:i:s')),
						'app' 			=> $_ENV['APPLICATION_NAME'],
						'id_user'		=> $tbsUsers->id_user,
						'username'		=> $tbsUsers->username,
						'nama'			=> $tbsUsers->nama,
						'level'			=> $tbsUsers->level,
						'keterangan'	=> $tbsUsers->keterangan,
						'status'	    => $tbsUsers->status,
					);
					$this->jsonwebtoken->jwtEncode($data, $tbsUsers->id_user, $this->utilities->getIPAddress());
					redirect('Welcome');
                }else{
                    $this->session->set_flashdata('message', 'Password salah.');
                    $this->session->set_flashdata('type_message', 'danger');
                    redirect('Auth/');
                }
			} else {
				$this->session->set_flashdata('message', 'Username tidak ditemukan.');
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Auth/');
			}
		}
	}

	function Logout()
	{
        $this->session->sess_destroy();
        redirect('Auth/');
	}
}
