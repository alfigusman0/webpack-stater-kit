<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ServerSide extends CI_Controller
{

	var $jwt = null;

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
		$this->load->model('ServerSide/SS_FormFilter');
		$this->load->model('ServerSide/SS_FormSearch');
	}

	function index()
	{
		$data = array(
			'title'       	=> 'DataTables | Web Apps',
			'content'       => 'default/content',
			'css'           => 'default/css',
			'javascript'    => 'default/javascript',
			'modal'         => 'default/modal',
		);
		$this->load->view('index', $data);
	}

	function FormFilter()
	{
		$data = array(
			'title'       	=> 'Form Filter | Web Apps',
			'content'       => 'ServerSide/FormFilter/content',
			'css'           => 'ServerSide/FormFilter/css',
			'javascript'    => 'ServerSide/FormFilter/javascript',
			'modal'         => 'ServerSide/FormFilter/modal',
		);
		$this->load->view('index', $data);
	}

	function FormSearch()
	{
		$data = array(
			'title'       	=> 'Form Search | Web Apps',
			'content'       => 'ServerSide/FormSearch/content',
			'css'           => 'ServerSide/FormSearch/css',
			'javascript'    => 'ServerSide/FormSearch/javascript',
			'modal'         => 'ServerSide/FormSearch/modal',
		);
		$this->load->view('index', $data);
	}

	function JsonFormFilter()
	{
		$list = $this->SS_FormFilter->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $row) {
			$sub_array = array();
			$sub_array[] = ++$no;
			$sub_array[] = "
				<div class=\"btn-group\">
					<button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
						<i class=\"fas fa-cog\"></i> <span class=\"caret\"></span>
					</button>
					<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
						<a class=\"dropdown-item\" href=\"".base_url('#' . $row->id)."\" target=\"_blank\">Detail</a>
						<a class=\"dropdown-item\" href=\"".base_url('#' . $row->id)."\" onclick=\"return confirm('Apakah Anda Yakin ?')\">Hapus</a>
					</ul>
				</div>";
			$sub_array[] = $row->kolom_1;
			$sub_array[] = ($row->kolom_2 == '1') ? "<span class=\"label label-success\">True</span>" : "<span class=\"label label-danger\">False</span>";
			$sub_array[] = $row->date_created;
			$sub_array[] = $row->date_updated;

			$data[] = $sub_array;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->SS_FormFilter->count_all(),
			"recordsFiltered" => $this->SS_FormFilter->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	function JsonFormSearch()
	{
		$fetch_data = $this->SS_FormSearch->make_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($fetch_data as $row) {
			$sub_array = array();
			$sub_array[] = ++$no;
			$sub_array[] = "
				<div class=\"btn-group\">
					<button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
						<i class=\"fas fa-cog\"></i> <span class=\"caret\"></span>
					</button>
					<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
						<a class=\"dropdown-item\" href=\"".base_url('#' . $row->id)."\" target=\"_blank\">Detail</a>
						<a class=\"dropdown-item\" href=\"".base_url('#' . $row->id)."\" onclick=\"return confirm('Apakah Anda Yakin ?')\">Hapus</a>
					</ul>
				</div>";
			$sub_array[] = $row->kolom_1;
			$sub_array[] = ($row->kolom_2 == '1') ? "<span class=\"label label-success\">True</span>" : "<span class=\"label label-danger\">False</span>";
			$sub_array[] = $row->date_created;
			$sub_array[] = $row->date_updated;

			$data[] = $sub_array;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"		=>	$this->SS_FormSearch->get_all_data(),
			"recordsFiltered"	=>	$this->SS_FormSearch->get_filtered_data(),
			"data"				=>	$data
		);
		echo json_encode($output);
	}
}
