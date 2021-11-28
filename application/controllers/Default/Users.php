<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{

	var $jwt = null;

	function __construct()
	{
		parent::__construct();
		$this->jwt = $this->jsonwebtoken->jwtDecode();
		if ($this->jwt == FALSE) {
			redirect('Auth');
		}

		if ($this->jwt->app != 'Development') {
			redirect('Auth');
		}

		$level = $this->jwt->level;
		if ($level == "FAKULTAS" || $level == "RAPOR" || $level == "PORTOFOLIO" || $level == "PRESTASI") {
			$this->session->set_flashdata('message', 'Hak Akses Ditolak.');
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Dashboard/');
		}
		$this->load->model('ServerSide/SS_pradaftar_users');
		$this->load->model('Pradaftar/Tbl_pradaftar_biodata');
		$this->load->model('Pradaftar/Tbl_pradaftar_portofolio');
		$this->load->model('Pradaftar/Tbl_pradaftar_jadwal');
		$this->load->model('Pradaftar/Tbl_pradaftar_kelulusan');
		$this->load->model('Pradaftar/Tbl_pradaftar_file');
		$this->load->model('Pradaftar/Tbl_pradaftar_nilai');
		$this->load->model('Pradaftar/Tbl_pradaftar_rapor');
		$this->load->model('Pradaftar/Tbl_pradaftar_orangtua');
		$this->load->model('Pradaftar/Tbl_pradaftar_prestasi');
		$this->load->model('Pradaftar/Tbl_pradaftar_users');
		$this->load->model('Tmp/Tmp_pradaftar_users');
		$this->load->model('Settings/Tbl_setting_agama');
		$this->load->model('Settings/Tbl_setting_jenis_sekolah');
		$this->load->model('Settings/Tbl_setting_jurusan_sekolah');
		$this->load->model('Settings/Tbl_setting_rumpun');
		$this->load->model('Settings/Tbl_setting_tipe_ujian');
		$this->load->model('Settings/Tbl_setting_provinsi');
		$this->load->model('Settings/Tbl_setting_kabupaten');
		$this->load->model('Settings/Tbl_setting_pendidikan');
		$this->load->model('Settings/Tbl_setting_pekerjaan');
		$this->load->model('Settings/Tbl_setting_penghasilan');
		$this->load->model('Settings/Tbl_setting_kecamatan');
		$this->load->model('Settings/Tbl_setting_kelurahan');
		$this->load->model('Settings/Tbl_setting_jadwal');
		$this->load->model('Settings/Tbl_setting_users');
		$this->load->model('Views/Pradaftar/View_pradaftar_biodata');
		$this->load->model('Views/Pradaftar/View_pradaftar_rapor');
		$this->load->model('Views/Pradaftar/View_pradaftar_jadwal');
		$this->load->model('Views/Pradaftar/View_pradaftar_kelulusan');
		$this->load->model('Views/Pradaftar/View_pradaftar_orangtua');
		$this->load->model('Views/Pradaftar/View_pradaftar_pembayaran');
		$this->load->model('Views/Pradaftar/View_pradaftar_pilihan');
		$this->load->model('Views/Pradaftar/View_pradaftar_users');
		$this->load->model('Views/Pradaftar/View_pradaftar_file');
		$this->load->model('Views/Settings/View_setting_jadwal');
	}

	function index()
	{
		$rules[0] = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[1] = array(
			'select'    => 'YEAR(date_created) as tahun', //not null
			'where'     => null,
			'order'     => 'tahun DESC',
		);
		$data = array(
			'content'       => 'Pradaftar/users/read/content',
			'css'           => 'Pradaftar/users/read/css',
			'javascript'    => 'Pradaftar/users/read/javascript',
			'modal'         => 'Pradaftar/users/read/modal',
			'tblSTipeUjian'	=> $this->Tbl_setting_tipe_ujian->read($rules[0])->result(),
			'tahun'			=> $this->Tbl_pradaftar_users->distinct($rules[1])->result()
		);
		$this->load->view('index', $data);
	}

	function Detail($id)
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
			),
			'or_where'  => null,
			'order'     => 'date_created ASC',
			'limit'     => null,
			'pagging'   => null,
		);
		$tblPUsers = $this->View_pradaftar_users->where($rules[0])->row();
		$rules[1] = array(
			'select'    => null,
			'where'     => array(
				'nomor_peserta' => $tblPUsers->nomor_peserta,
			),
			'or_where'  => null,
			'order'     => 'date_created ASC',
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[2] = array(
			'select'    => null,
			'where'     => array(
				'kd_pembayaran' => $tblPUsers->kd_pembayaran,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[3] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
				'id_tipe_file' => 15,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[4] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
				'id_tipe_file' => 14,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		if ($tblPUsers->id_tipe_ujian == 2) :
			$tipe_file = 16;
		else :
			$tipe_file = 17;
		endif;
		$rules[5] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
				'id_tipe_file' => $tipe_file,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[6] = array(
			'select'    => null,
			'where'     => array(
				'status' => '1',
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[7] = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[8] = array(
			'select'    => null,
			'where'     => array(
				'status' => '1',
				'quota >' => '0'
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[9] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
				'orangtua' => 'Ayah'
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[10] = array(
			'select'    => null,
			'where'     => array(
				'id_pradaftar_users' => $id,
				'orangtua' => 'Ibu'
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'content'           	=> 'Pradaftar/users/detail/content',
			'css'               	=> 'Pradaftar/users/detail/css',
			'javascript'        	=> 'Pradaftar/users/detail/javascript',
			'modal'             	=> 'Pradaftar/users/detail/modal',
			'tblPUsers'         	=> $tblPUsers,
			'tblPBiodata'       	=> $this->View_pradaftar_biodata->where($rules[0])->row(),
			'tblPFile'       		=> $this->Tbl_pradaftar_file->where($rules[3])->row(),
			'tblPFileFoto'      	=> $this->Tbl_pradaftar_file->where($rules[4])->row(),
			'tblPJadwal'        	=> $this->View_pradaftar_jadwal->where($rules[1])->row(),
			'tblPKelulusan' 		=> $this->View_pradaftar_kelulusan->where($rules[1])->row(),
			'tblPOrangTua'      	=> $this->View_pradaftar_orangtua->where($rules[0])->result(),
			'tblPOrangTuaAyah'  	=> $this->View_pradaftar_orangtua->where($rules[9])->row(),
			'tblPOrangTuaIbu'   	=> $this->View_pradaftar_orangtua->where($rules[10])->row(),
			'tblPPembayaran'    	=> $this->View_pradaftar_pembayaran->where($rules[2])->row(),
			'tblPPilihan'       	=> $this->View_pradaftar_pilihan->where($rules[1])->result(),
			'tblPPrestasi'      	=> $this->Tbl_pradaftar_prestasi->where($rules[0])->result(),
			'tbSAgama'				=> $this->Tbl_setting_agama->where($rules[6])->result(),
			'tblSPendidikan'		=> $this->Tbl_setting_pendidikan->where($rules[6])->result(),
			'tblSPekerjaan'			=> $this->Tbl_setting_pekerjaan->where($rules[6])->result(),
			'tblSPenghasilan'		=> $this->Tbl_setting_penghasilan->where($rules[6])->result(),
			'tbSJenisSekolah'		=> $this->Tbl_setting_jenis_sekolah->where($rules[6])->result(),
			'tbSJurusanSekolah'		=> $this->Tbl_setting_jurusan_sekolah->where($rules[6])->result(),
			'tblSTipeUjian'			=> $this->Tbl_setting_tipe_ujian->where($rules[6])->result(),
			'tbSRumpun'				=> $this->Tbl_setting_rumpun->where($rules[6])->result(),
			'tbSProvinsi'			=> $this->Tbl_setting_provinsi->read($rules[7])->result(),
			'viewPFileSertifikat'	=> $this->View_pradaftar_file->where($rules[5])->row(),
			'viewSJadwal'			=> $this->View_setting_jadwal->where($rules[8])->result(),
			'tblPNilai'				=> $this->Tbl_pradaftar_nilai->where($rules[0])->result()
		);
		$this->load->view('index', $data);
	}

	function Update($id)
	{
		$rules[] = array('field' => 'nik_passport', 'label' => 'NIK (No.KTP)', 'rules' => 'required');
		$rules[] = array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required');
		$rules[] = array('field' => 'tgl_lhr', 'label' => 'Tanggal Lahir', 'rules' => 'required');
		$rules[] = array('field' => 'kategori', 'label' => 'Kategori', 'rules' => 'required');
		$rules[] = array('field' => 'nmr_tlp', 'label' => 'Nomor Telepon', 'rules' => 'required');
		$rules[] = array('field' => 'email', 'label' => 'Email', 'rules' => 'required');
		$rules[] = array('field' => 'biodata', 'label' => 'Verifikasi Biodata', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				$password = $this->input->post('password');
				if (!empty($password)) {
					$data = array(
						'nik_passport'  => $this->input->post('nik_passport'),
						'nama'          => strtoupper($this->input->post('nama')),
						'tgl_lhr'       => $this->input->post('tgl_lhr'),
						'kategori'      => $this->input->post('kategori'),
						'nmr_tlp'       => $this->input->post('nmr_tlp'),
						'email'         => $this->input->post('email'),
						'password'      => md5(md5($password)),
						'biodata'       => $this->input->post('biodata'),
					);
				} else {
					$data = array(
						'nik_passport'  => $this->input->post('nik_passport'),
						'nama'          => strtoupper($this->input->post('nama')),
						'tgl_lhr'       => $this->input->post('tgl_lhr'),
						'kategori'      => $this->input->post('kategori'),
						'nmr_tlp'       => $this->input->post('nmr_tlp'),
						'email'         => $this->input->post('email'),
						'biodata'       => $this->input->post('biodata'),
					);
				}
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id
					),
					'data'  => $data,
				);
				$this->Tbl_pradaftar_users->update($rules);
				$this->session->set_flashdata('message', 'Data berhasil diubah.');
				$this->session->set_flashdata('type_message', 'success');
				redirect('Pradaftar/Users/Detail/' . $id);
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function UpdateBiodata($id)
	{
		if (!empty($id_kelurahan)) {
			$rules[] = array('field' => 'id_provinsi', 'label' => 'Provinsi', 'rules' => 'required');
			$rules[] = array('field' => 'id_kabupaten', 'label' => 'Kabupaten', 'rules' => 'required');
			$rules[] = array('field' => 'id_kecamatan', 'label' => 'Kecamatan', 'rules' => 'required');
			$rules[] = array('field' => 'id_kelurahan', 'label' => 'Kelurahan', 'rules' => 'required');
		}
		$rules[] = array('field' => 'tempat', 'label' => 'Tempat', 'rules' => 'required');
		$rules[] = array('field' => 'agama', 'label' => 'Agama', 'rules' => 'required');
		$rules[] = array('field' => 'kodepos', 'label' => 'Kode POS', 'rules' => 'required');
		$rules[] = array('field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required');
		$rules[] = array('field' => 'jurusan_sekolah', 'label' => 'Jurusan Sekolah', 'rules' => 'required');
		$rules[] = array('field' => 'akreditasi_sekolah', 'label' => 'Akreditasi Sekolah', 'rules' => 'required');
		$rules[] = array('field' => 'asal_sekolah', 'label' => 'Asal Sekolah', 'rules' => 'required');
		$rules[] = array('field' => 'rumpun', 'label' => 'Rumpun', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				$id_kelurahan = $this->input->post('id_kelurahan');
				if (empty($id_kelurahan)) {
					$id_kelurahan = $this->input->post('old_id_kelurahan');
				}
				$data = array(
					'tempat' => strtoupper($this->input->post('tempat')),
					'jenis_kelamin' => $this->input->post('jk'),
					'warga_negara' => $this->input->post('wn'),
					'id_agama' => $this->input->post('agama'),
					'id_kelurahan' => $id_kelurahan,
					'kodepos' => $this->input->post('kodepos'),
					'alamat' => $this->input->post('alamat'),
					'id_jurusan_sekolah' => $this->input->post('jurusan_sekolah'),
					'asal_sekolah' => strtoupper($this->input->post('asal_sekolah')),
					'akreditasi_sekolah' => $this->input->post('akreditasi_sekolah'),
					'id_rumpun' => $this->input->post('rumpun'),
				);
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id
					),
					'data'  => $data,
				);
				$this->Tbl_pradaftar_biodata->update($rules);
				$this->session->set_flashdata('message', 'Data berhasil diubah.');
				$this->session->set_flashdata('type_message', 'success');
				redirect('Pradaftar/Users/Detail/' . $id);
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function UpdateOrangtua($id)
	{
		$rules[] = array('field' => 'nik_orangtua', 'label' => 'NIK Orang Tua', 'rules' => 'required');
		$rules[] = array('field' => 'nama_orangtua', 'label' => 'Nama Orang Tua', 'rules' => 'required');
		$rules[] = array('field' => 'tgl_lhr_orangtua', 'label' => 'Tanggal Lahir Orang Tua', 'rules' => 'required');
		$rules[] = array('field' => 'id_pendidikan', 'label' => 'Pendidikan', 'rules' => 'required');
		$rules[] = array('field' => 'id_pekerjaan', 'label' => 'Pekerjaan', 'rules' => 'required');
		$rules[] = array('field' => 'id_penghasilan', 'label' => 'Penghasilan', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id,
						'orangtua' => $this->input->post('orangtua'),
					),
					'data'  => array(
						'nik_orangtua' => $this->input->post('nik_orangtua'),
						'nama_orangtua' => strtoupper($this->input->post('nama_orangtua')),
						'tgl_lhr_orangtua' => $this->input->post('tgl_lhr_orangtua'),
						'id_pendidikan' => $this->input->post('id_pendidikan'),
						'id_pekerjaan' => $this->input->post('id_pekerjaan'),
						'id_penghasilan' => $this->input->post('id_penghasilan'),
					),
				);
				$this->Tbl_pradaftar_orangtua->update($rules);
				$this->session->set_flashdata('message', 'Data berhasil disimpan.');
				$this->session->set_flashdata('type_message', 'success');
				redirect('Pradaftar/Users/Detail/' . $id);
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function UpdatePortofolio($id)
	{
		$rules[] = array('field' => 'bersedia', 'label' => 'Bersedia', 'rules' => 'required');
		$rules[] = array('field' => 'pernyataan', 'label' => 'Pernyataan', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				if (!empty($this->input->post('youtube'))) {
					$youtube = $this->input->post('youtube');
				} else {
					$youtube = '-';
				}
				$data = array(
					'portofolio_1' => $this->input->post('portofolio_1'),
					'portofolio_2' => $this->input->post('portofolio_2'),
					'portofolio_3' => $this->input->post('portofolio_3'),
					'youtube' => $youtube,
					'bersedia' => $this->input->post('bersedia'),
					'pernyataan' => $this->input->post('pernyataan'),
				);
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id
					),
					'data'  => $data,
				);
				$this->Tbl_pradaftar_portofolio->update($rules);
				$this->session->set_flashdata('message', 'Data berhasil diubah.');
				$this->session->set_flashdata('type_message', 'success');
				redirect('Pradaftar/Users/Detail/' . $id);
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function UpdateNilai($id, $nomor_peserta)
	{
		$rules[] = array('field' => 'np_1', 'label' => 'Deskripsi Diri', 'rules' => 'required');
		$rules[] = array('field' => 'np_2', 'label' => 'Wawasan Kebangsaan', 'rules' => 'required');
		$rules[] = array('field' => 'np_3', 'label' => 'Wawasan UIN', 'rules' => 'required');
		$rules[] = array('field' => 'btq', 'label' => 'BTQ', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				$data = array(
					'np_1'  => $this->input->post('np_1'),
					'np_2'          => strtoupper($this->input->post('np_2')),
					'np_3'       => $this->input->post('np_3'),
					'btq'      => $this->input->post('btq'),
					'updated_by'      => $this->jwt->id_users
				);
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id
					),
					'data'  => $data,
				);
				if ($this->Tbl_pradaftar_portofolio->update($rules)) {
					$rules = array(
						'where' => array(
							'nomor_peserta' => $nomor_peserta
						),
						'data'  => array(
							'nilai'      => $this->input->post('prestasi'),
							'updated_by'      => $this->jwt->id_users
						),
					);
					$this->Tbl_pradaftar_kelulusan->update($rules);
					$this->session->set_flashdata('message', 'Data berhasil diubah.');
					$this->session->set_flashdata('type_message', 'success');
					redirect('Pradaftar/Users/Detail/' . $id);
				}
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function UpdateJadwal($id, $id_jadwal)
	{
		$rules[] = array('field' => 'id_jadwal', 'label' => 'Jadwal', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		} else {
			try {
				$data = array(
					'id_jadwal' => $this->input->post('id_jadwal'),
				);
				$rules = array(
					'where' => array(
						'nomor_peserta' => $this->input->post('nomor_peserta')
					),
					'data'  => $data,
				);
				if ($this->Tbl_pradaftar_jadwal->update($rules)) {
					$rules = array(
						'select'    => null,
						'where'     => array(
							'id_jadwal' => $id_jadwal,
						),
						'or_where'  => null,
						'order'     => null,
						'limit'     => null,
						'pagging'   => null,
					);
					$tblSJadwal = $this->Tbl_setting_jadwal->where($rules)->row();
					$data = array(
						'quota' => $tblSJadwal->quota + 1,
					);
					$rules = array(
						'where' => array(
							'id_jadwal' => $id_jadwal
						),
						'data'  => $data,
					);
					$this->Tbl_setting_jadwal->update($rules);
					$rules = array(
						'select'    => null,
						'where'     => array(
							'id_jadwal' => $this->input->post('id_jadwal'),
						),
						'or_where'  => null,
						'order'     => null,
						'limit'     => null,
						'pagging'   => null,
					);
					$tblSJadwal = $this->Tbl_setting_jadwal->where($rules)->row();
					$data = array(
						'quota' => $tblSJadwal->quota - 1,
					);
					$rules = array(
						'where' => array(
							'id_jadwal' => $this->input->post('id_jadwal')
						),
						'data'  => $data,
					);
					$this->Tbl_setting_jadwal->update($rules);
					$this->session->set_flashdata('message', 'Jadwal berhasil diubah.');
					$this->session->set_flashdata('type_message', 'success');
					redirect('Pradaftar/Users/Detail/' . $id);
				}
			} catch (Exception $e) {
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message', 'danger');
				redirect('Pradaftar/Users/Detail/' . $id);
			}
		}
	}

	function Delete($id)
	{
		$level = $this->jwt->level;
		if ($level == "KEUANGAN") {
			$this->session->set_flashdata('message', 'Hak Akses Ditolak.');
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/');
		}
		try {
			$rules = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $id,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblPUsers = $this->Tbl_pradaftar_users->where($rules)->row();
			if ($tblPUsers->pembayaran == '1') {
				$this->session->set_flashdata('message', 'Data yang sudah diverifikasi pembayaran tidak bisa dihapus.');
				$this->session->set_flashdata('type_message', 'warning');
				redirect('Pradaftar/Users/Detail/' . $id);
			} else {
				$data = array(
					'kd_pembayaran'	=> $tblPUsers->kd_pembayaran,
					'nomor_peserta'	=> $tblPUsers->nomor_peserta,
					'nik_passport'	=> $tblPUsers->nik_passport,
					'nama'	=> $tblPUsers->nama,
					'tgl_lhr'	=> $tblPUsers->tgl_lhr,
					'kategori'	=> $tblPUsers->kategori,
					'id_tipe_ujian'	=> $tblPUsers->id_tipe_ujian,
					'nmr_tlp'	=> $tblPUsers->nmr_tlp,
					'email'	=> $tblPUsers->email,
					'password'	=> $tblPUsers->password,
					'ip_login'	=> $tblPUsers->ip_login,
					'login'	=> $tblPUsers->login,
					'ip_logout'	=> $tblPUsers->ip_logout,
					'logout'	=> $tblPUsers->logout,
					'pembayaran'	=> $tblPUsers->pembayaran,
					'biodata'	=> $tblPUsers->biodata,
					'tgl_daftar'	=> $tblPUsers->date_created,
				);
				$this->Tmp_pradaftar_users->create($data);
				$rules = array('id_pradaftar_users' => $id);
				$this->Tbl_pradaftar_users->delete($rules);
				$this->session->set_flashdata('message', 'Data berhasil dihapus.');
				$this->session->set_flashdata('type_message', 'success');
				redirect('Pradaftar/Users/');
			}
		} catch (Exception $e) {
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		}
	}

	function VerifikasiRapor($id)
	{
		try {
			$rules[0] = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $id,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$viewRapor = $this->View_pradaftar_rapor->where($rules[0])->result();
			foreach ($viewRapor as $a) {
				$rules = array(
					'where' => array(
						'id_pradaftar_users' => $id,
						'id_mapel_sekolah' => $a->id_mapel_sekolah,
					),
					'data'  => array(
						'verifikasi' => $this->input->post('verifikasi')
					),
				);
				$this->Tbl_pradaftar_rapor->update($rules);
			}
			$this->session->set_flashdata('message', 'Verifikasi berhasil diubah.');
			$this->session->set_flashdata('type_message', 'success');
			redirect('Pradaftar/Users/Detail/' . $id);
		} catch (Exception $e) {
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		}
	}

	function NotifikasiRapor($id)
	{
		try {
			$rules = array(
				'where' => array(
					'id_pradaftar_users' => $id,
					'id_mapel_sekolah' => $this->input->post('id_mapel_sekolah')
				),
				'data'  => array(
					'notif' => $this->input->post('notif')
				),
			);
			$this->Tbl_pradaftar_rapor->update($rules);
			$this->session->set_flashdata('message', 'Notifikasi berhasil diubah.');
			$this->session->set_flashdata('type_message', 'success');
			redirect('Pradaftar/Users/Detail/' . $id);
		} catch (Exception $e) {
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		}
	}

	function ResetRapor($id)
	{
		try {
			$where = array(
				'id_pradaftar_users' => $id
			);
			$this->Tbl_pradaftar_rapor->delete($where);
			$this->session->set_flashdata('message', 'Rapor berhasil di reset.');
			$this->session->set_flashdata('type_message', 'success');
			redirect('Pradaftar/Users/Detail/' . $id);
		} catch (Exception $e) {
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id);
		}
	}

	public function listKabupaten()
	{
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_provinsi' => $this->input->post('id_provinsi')
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$kabupaten = $this->Tbl_setting_kabupaten->where($rules)->result();
		$lists = "<option>&laquo; Pilih &raquo;</option>";
		foreach ($kabupaten as $data) {
			$lists .= "<option value='" . $data->id_kabupaten . "'>" . $data->kabupaten . "</option>";
		}
		$callback = array('list_kabupaten' => $lists);
		echo json_encode($callback);
	}

	public function listKecamatan()
	{
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_kabupaten' => $this->input->post('id_kabupaten')
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$kecamatan = $this->Tbl_setting_kecamatan->where($rules)->result();
		$lists = "<option>&laquo; Pilih &raquo;</option>";
		foreach ($kecamatan as $data) {
			$lists .= "<option value='" . $data->id_kecamatan . "'>" . $data->kecamatan . "</option>";
		}
		$callback = array('list_kecamatan' => $lists);
		echo json_encode($callback);
	}

	public function listKelurahan()
	{
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_kecamatan' => $this->input->post('id_kecamatan')
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$kelurahan = $this->Tbl_setting_kelurahan->where($rules)->result();
		$lists = "<option>&laquo; Pilih &raquo;</option>";
		foreach ($kelurahan as $data) {
			$lists .= "<option value='" . $data->id_kelurahan . "'>" . $data->kelurahan . "</option>";
		}
		$callback = array('list_kelurahan' => $lists);
		echo json_encode($callback);
	}

	function Rapor()
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'level' => 'RAPOR',
			),
			'or_where'  => null,
			'order'     => 'nama ASC',
			'limit'     => null,
			'pagging'   => null,
		);
		$tblSUsers = $this->Tbl_setting_users->where($rules[0])->result();
		foreach ($tblSUsers as $a) {
			$rules[1] = array(
				'select'    => 'distinct(id_pradaftar_users)',
				'where'     => array(
					'created_by' => $a->id_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblPRapor[$a->id_users] = $this->Tbl_pradaftar_rapor->where($rules[1])->num_rows();
		}
		$data = array(
			'content'       => 'Pradaftar/users/rapor/content',
			'css'           => 'Pradaftar/users/rapor/css',
			'javascript'    => 'Pradaftar/users/rapor/javascript',
			'modal'         => 'Pradaftar/users/rapor/modal',
			'tblSUsers'		=> $tblSUsers,
			'tblPRapor'		=> $tblPRapor
		);
		$this->load->view('index', $data);
	}

	function Portofolio()
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'level' => 'PORTOFOLIO',
			),
			'or_where'  => null,
			'order'     => 'nama ASC',
			'limit'     => null,
			'pagging'   => null,
		);
		$tblSUsers = $this->Tbl_setting_users->where($rules[0])->result();
		foreach ($tblSUsers as $a) {
			$rules[1] = array(
				'select'    => 'distinct(id_pradaftar_users)',
				'where'     => array(
					'created_by' => $a->id_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblPPortofolio[$a->id_users] = $this->Tbl_pradaftar_portofolio->where($rules[1])->num_rows();
		}
		$data = array(
			'content'       => 'Pradaftar/users/portofolio/content',
			'css'           => 'Pradaftar/users/portofolio/css',
			'javascript'    => 'Pradaftar/users/portofolio/javascript',
			'modal'         => 'Pradaftar/users/portofolio/modal',
			'tblSUsers'		=> $tblSUsers,
			'tblPPortofolio'		=> $tblPPortofolio
		);
		$this->load->view('index', $data);
	}

	function Prestasi()
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'level' => 'PRESTASI',
			),
			'or_where'  => null,
			'order'     => 'nama ASC',
			'limit'     => null,
			'pagging'   => null,
		);
		$tblSUsers = $this->Tbl_setting_users->where($rules[0])->result();
		foreach ($tblSUsers as $a) {
			$rules[1] = array(
				'select'    => 'distinct(id_pradaftar_users)',
				'where'     => array(
					'created_by' => $a->id_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblPPrestasi[$a->id_users] = $this->Tbl_pradaftar_users->where($rules[1])->num_rows();
		}
		$data = array(
			'content'       => 'Pradaftar/users/prestasi/content',
			'css'           => 'Pradaftar/users/prestasi/css',
			'javascript'    => 'Pradaftar/users/prestasi/javascript',
			'modal'         => 'Pradaftar/users/prestasi/modal',
			'tblSUsers'		=> $tblSUsers,
			'tblPPrestasi'		=> $tblPPrestasi
		);
		$this->load->view('index', $data);
	}

	function DetailRapor($id)
	{
		$rules[0] = array(
			'select'    => 'distinct(id_pradaftar_users)',
			'where'     => array(
				'created_by' => $id
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$viewPRapor = $this->View_pradaftar_rapor->where($rules[0])->result();
		foreach ($viewPRapor as $a) {
			$rules[1] = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $a->id_pradaftar_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$viewPUsers[$a->id_pradaftar_users] = $this->View_pradaftar_users->where($rules[1])->row();

			$rules[2] = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $a->id_pradaftar_users,
					'verifikasi_rapor' => '1'
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$raporVerifikasi[$a->id_pradaftar_users] = $this->View_pradaftar_rapor->where($rules[2])->num_rows();

			$rules[3] = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $a->id_pradaftar_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$raporMatkul[$a->id_pradaftar_users] = $this->View_pradaftar_rapor->where($rules[3])->num_rows();
		}
		$data = array(
			'content'       => 'Pradaftar/rapor/read/content',
			'css'           => 'Pradaftar/rapor/read/css',
			'javascript'    => 'Pradaftar/rapor/read/javascript',
			'modal'         => 'Pradaftar/rapor/read/modal',
			'viewPRapor'	=> $viewPRapor,
			'viewPUsers'	=> $viewPUsers,
			'raporVerifikasi'	=> $raporVerifikasi,
			'raporMatkul'	=> $raporMatkul,
		);
		$this->load->view('index', $data);
	}

	function DetailPortofolio($id)
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'created_by' => $id
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblPPortofolio = $this->Tbl_pradaftar_portofolio->where($rules[0])->result();
		foreach ($tblPPortofolio as $a) {
			$rules[1] = array(
				'select'    => null,
				'where'     => array(
					'id_pradaftar_users' => $a->id_pradaftar_users,
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$viewPUsers[$a->id_pradaftar_users] = $this->View_pradaftar_users->where($rules[1])->row();
		}
		$data = array(
			'content'       => 'Pradaftar/portofolio/read/content',
			'css'           => 'Pradaftar/portofolio/read/css',
			'javascript'    => 'Pradaftar/portofolio/read/javascript',
			'modal'         => 'Pradaftar/portofolio/read/modal',
			'tblPPortofolio'	=> $tblPPortofolio,
			'viewPUsers'	=> $viewPUsers,
		);
		$this->load->view('index', $data);
	}

	function DetailPrestasi($id)
	{
		$rules[0] = array(
			'select'    => null,
			'where'     => array(
				'created_by' => $id
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblPPrestasi = $this->View_pradaftar_users->where($rules[0])->result();

		$data = array(
			'content'       => 'Pradaftar/prestasi/read/content',
			'css'           => 'Pradaftar/prestasi/read/css',
			'javascript'    => 'Pradaftar/prestasi/read/javascript',
			'modal'         => 'Pradaftar/prestasi/read/modal',
			'tblPPrestasi'	=> $tblPPrestasi,
		);
		$this->load->view('index', $data);
	}

	function UpdateValsem($id, $semester, $id_users, $valsem)
	{
		$level = $this->jwt->level;
		if ($level == "KEUANGAN" || $level == "AKADEMIK") {
			$this->session->set_flashdata('message', 'Hak Akses Ditolak.');
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/');
		}
		try {
			if ($valsem == '0') {
				$valsem_id = '1';
			} else {
				$valsem_id = '0';
			}
			if ($semester == '1') {
				$rules = array(
					'where' => array(
						'id_pradaftar_rapor' => $id,
					),
					'data'  => array(
						'valsem_1' => $valsem_id
					),
				);
			} else if ($semester == '2') {
				$rules = array(
					'where' => array(
						'id_pradaftar_rapor' => $id,
					),
					'data'  => array(
						'valsem_2' => $valsem_id
					),
				);
			} else if ($semester == '3') {
				$rules = array(
					'where' => array(
						'id_pradaftar_rapor' => $id,
					),
					'data'  => array(
						'valsem_3' => $valsem_id
					),
				);
			} else if ($semester == '4') {
				$rules = array(
					'where' => array(
						'id_pradaftar_rapor' => $id,
					),
					'data'  => array(
						'valsem_4' => $valsem_id
					),
				);
			} else {
				$rules = array(
					'where' => array(
						'id_pradaftar_rapor' => $id,
					),
					'data'  => array(
						'valsem_5' => $valsem_id
					),
				);
			}

			$this->Tbl_pradaftar_rapor->update($rules);
			$this->session->set_flashdata('message', 'Validasi semester berhasil diubah.');
			$this->session->set_flashdata('type_message', 'success');
			redirect('Pradaftar/Users/Detail/' . $id_users);
		} catch (Exception $e) {
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message', 'danger');
			redirect('Pradaftar/Users/Detail/' . $id_users);
		}
	}

	function Json()
	{
		$list = $this->SS_pradaftar_users->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
			$row[] = "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class='fa fa-gear'></i> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"" . base_url('Pradaftar/Users/Detail/' . $user->id_pradaftar_users) . "\" target='_blank'>Detail</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"" . base_url('Pradaftar/Users/Delete/' . $user->id_pradaftar_users) . "\" onclick=\"return confirm('Apakah Anda Yakin ?')\">Delete</i></a></li>
                    </ul>
                </div>";
			$row[] = $user->kd_pembayaran;
			$row[] = $user->nomor_peserta;
			$row[] = $user->nik_passport;
			$row[] = $user->nama;
			$row[] = ($user->kategori == 1) ? "IPA / SAINS" : "IPS / SOSIAL DAN HUMANIORA";
			$row[] = $user->tipe_ujian;
			$row[] = ($user->pembayaran == 1) ? "<span class=\"label label-success\">Sudah Bayar</span>" : "<span class=\"label label-danger\">Belum Bayar</span>";
			$row[] = ($user->biodata == 1) ? "<span class=\"label label-success\">Sudah Verifikasi</span>" : "<span class=\"label label-danger\">Belum Verifikasi</span>";

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->SS_pradaftar_users->count_all(),
			"recordsFiltered" => $this->SS_pradaftar_users->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}
}
