<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SS_FormSearch extends CI_Model
{
    protected $table = 'tbs_default'; // Nama tabel
    protected $select_column = array('*'); // Kolom yang ingin di-select
    protected $order_column = array(
        'id',
        null,
        'kolom_1',
        'status',
        'date_created',
        'date_updated',
    );

    protected $column_search = array(
        'kolom_1',
        'status',
        'date_created',
    );

    protected $order = array('id' => 'DESC'); // Default order

    /**
     * Build the query for data tables.
     */
    private function _make_query()
    {
        $this->db->select($this->select_column);
        $this->db->from($this->table);

        // Apply search filters
        $search_value = $this->input->post('search')['value'] ?? null;
        if (!empty($search_value)) {
            $this->db->group_start(); // Open bracket for OR conditions
            foreach ($this->column_search as $index => $item) {
                if ($index === 0) {
                    $this->db->like($item, $search_value);
                } else {
                    $this->db->or_like($item, $search_value);
                }
            }
            $this->db->group_end(); // Close bracket
        }

        // Apply ordering
        $order = $this->input->post('order');
        if ($order) {
            $order_column = $this->order_column[$order[0]['column']] ?? 'id';
            $order_dir = $order[0]['dir'] ?? 'DESC';
            $this->db->order_by($order_column, $order_dir);
        } else {
            $this->db->order_by(key($this->order), $this->order[key($this->order)]);
        }
    }

    /**
     * Fetch the data for data tables with pagination.
     *
     * @return array
     */
    public function get_datatables()
    {
        $this->_make_query();
        $length = $this->input->post('length') ?? -1;
        $start = $this->input->post('start') ?? 0;
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
    public function count_filtered()
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
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
