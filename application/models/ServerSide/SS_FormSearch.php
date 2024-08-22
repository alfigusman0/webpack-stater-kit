<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SS_FormSearch extends CI_Model
{
    protected $table = 'tbs_default'; // Nama tabel
    protected $select_column = array('*'); // Kolom yang ingin di-select
    protected $order_column = array(
        'id',
        null, // Kolom ini tidak akan diurutkan
        'kolom_1',
        'status',
        'date_created',
        'date_updated',
    );

    /**
     * Build the query for data tables.
     */
    private function _make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);

        // Apply search filters
        if (!empty($_POST['search']['value'])) {
            $search_value = $_POST['search']['value'];
            $this->db->group_start(); // Open bracket for OR conditions
            $this->db->like('kolom_1', $search_value);
            $this->db->or_like('status', $search_value);
            $this->db->or_like('date_created', $search_value);
            $this->db->or_like('date_updated', $search_value);
            $this->db->group_end(); // Close bracket
        }

        // Apply ordering
        if (isset($_POST['order'])) {
            $order_column = $this->order_column[$_POST['order'][0]['column']] ?? 'id';
            $order_dir = $_POST['order'][0]['dir'] ?? 'DESC';
            $this->db->order_by($order_column, $order_dir);
        } else {
            $this->db->order_by('id', 'DESC');
        }
    }

    /**
     * Get the data for data tables with pagination.
     *
     * @return array
     */
    public function make_datatables()
    {
        $this->_make_query();
        $length = $_POST['length'] ?? -1;
        $start = $_POST['start'] ?? 0;
        if ($length != -1) {
            $this->db->limit($length, $start);
        }
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Get the number of filtered results.
     *
     * @return int
     */
    public function get_filtered_data()
    {
        $this->_make_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * Get the total number of records in the table.
     *
     * @return int
     */
    public function get_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
