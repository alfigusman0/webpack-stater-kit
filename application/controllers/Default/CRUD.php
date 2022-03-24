<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CRUD extends CI_Controller
{

    var $jwt = null;

    function __construct()
    {
        parent::__construct();
        $this->jwt = $this->jsonwebtoken->jwtDecode();
        /* if ($this->jwt == FALSE) {
            redirect('Welcome/');
        }

        if ($this->jwt->app != 'Application') {
            redirect('Welcome/');
        }

        if ($this->jwt->level == null) {
            $this->session->set_flashdata('message', 'Hak akses ditolak.');
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Welcome/');
        } */
        $this->load->model('Default_model');
    }

    function index()
    {
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $data = array(
			'title'       	=> 'CRUD | Web Apps',
            'content'       => 'crud/content',
            'css'           => 'crud/css',
            'javascript'    => 'crud/javascript',
            'modal'         => 'crud/modal',
            'tblDefault'    => $this->Default_model->read($rules)->result(),
        );
        $this->load->view('index', $data);
    }

    function Create()
    {
        $rules[] = array('field' => 'kolom_1', 'label' => 'Kolom 1', 'rules' => 'required');
        $rules[] = array('field' => 'kolom_2', 'label' => 'Kolom 2', 'rules' => 'required');
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Default/CRUD/');
        } else {
            try {
                $data = array(
                    'kolom_1'       => strtoupper($this->input->post('kolom_1')),
                    'kolom_2'       => $this->input->post('kolom_2'),
                    'created_by'    => $this->jwt->id_users || 1,
                    'updated_by'    => $this->jwt->id_users || 1,
                );
                $this->Default_model->create($data);
                $this->session->set_flashdata('message', 'Data berhasil disimpan.');
                $this->session->set_flashdata('type_message', 'success');
                redirect('Default/CRUD/');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message', 'danger');
                redirect('Default/CRUD/');
            }
        }
    }

    function Update($id)
    {
        $rules[] = array('field' => 'kolom_1', 'label' => 'Kolom 1', 'rules' => 'required');
        $rules[] = array('field' => 'kolom_2', 'label' => 'Kolom 2', 'rules' => 'required');
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Default/CRUD/');
        } else {
            try {
                $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
                        'kolom_1'     => strtoupper($this->input->post('kolom_1')),
                        'kolom_2'    => $this->input->post('kolom_2'),
                        'updated_by' => $this->jwt->id_users || 1,
                    ),
                );
                $this->Default_model->update($rules);
                $this->session->set_flashdata('message', 'Data berhasil diubah.');
                $this->session->set_flashdata('type_message', 'success');
                redirect('Default/CRUD/');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message', 'danger');
                redirect('Default/CRUD/');
            }
        }
    }

    function Delete($id)
    {
        try {
            $rules = array('id' => $id);
            $this->Default_model->delete($rules);
            $this->session->set_flashdata('message', 'Data berhasil dihapus.');
            $this->session->set_flashdata('type_message', 'success');
            redirect('Default/CRUD/');
        } catch (Exception $e) {
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message', 'danger');
            redirect('Default/CRUD/');
        }
    }
}
