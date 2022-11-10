<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SS_FormSearch extends CI_Model
{
	var $table = "tbs_default";  //table yang ingin di tampilkan
	var $select_column = array("*");  //sesuaikan dengan nama field table
	var $order_column = array(
		"id",
		null,
		"kolom_1",
		"status",
		"date_created",
		"date_updated",
	);

	function make_query()
	{
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if (isset($_POST["search"]["value"])) {
			$this->db->like("kolom_1", $_POST["search"]["value"]);
			$this->db->or_like("status", $_POST["search"]["value"]);
			$this->db->or_like("date_created", $_POST["search"]["value"]);
			$this->db->or_like("date_updated", $_POST["search"]["value"]);
		}
		if (isset($_POST["order"])) {
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else {
			$this->db->order_by('id', 'DESC');
		}
	}

	function make_datatables()
	{
		$this->make_query();
		if ($_POST["length"] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	function get_filtered_data()
	{
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}
