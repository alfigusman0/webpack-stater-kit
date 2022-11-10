<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cisession extends CI_Model
{
    var $table = "ci_session";

    function create($data)
    {
        if ($this->db->insert($this->table, $data)) {
            $data = array(
                'status' => false,
                'message' => '',
                'id' => $this->db->insert_id(),
            );
        } else {
            $data = array(
                'status' => true,
                'message' => $this->db->error(),
            );
            return $data;
        }
        return $data;
    }

    /* Rules Attributed Read Data
    $rules = array(
        'select'    => null,
        'order'     => null,
        'limit'     => null,
        'pagging'   => null,
    );
    */
    function read($rules)
    {
        if ($rules['select'] != null) {
            $this->db->select($rules['select']);
        }
        if ($rules['order'] != null) {
            $this->db->order_by($rules['order']);
        }
        if ($rules['limit'] != null) {
            $limit = $rules['limit'];
            $this->db->limit($limit['akhir'], $limit['awal']);
        }
        if ($rules['pagging'] != null) {
            $pagging = $rules['pagging'];
            return $this->db->get($this->table, $pagging['num'], $pagging['offset']);
        } else {
            return $this->db->get($this->table);
        }
    }

    /* Rules Attributed Update Data
    $rules = array(
        'where' => null, //not null
        'data'  => null, //not null
    );
    */
    function update($rules)
    {
        $this->db->where($rules['where']);
        if ($this->db->update($this->table, $rules['data'])) {
            $rules = array(
                'status' => false,
                'message' => '',
            );
        } else {
            $rules = array(
                'status' => true,
                'message' => $this->db->error(),
            );
        }
        return $rules;
    }

    function delete($where)
    {
        $this->db->where($where);
        if ($this->db->delete($this->table)) {
            $rules = array(
                'status' => false,
                'message' => '',
            );
        } else {
            $rules = array(
                'status' => true,
                'message' => $this->db->error(),
            );
        }
        return $rules;
    }

    /* Extra */
    /* Rules Attributed Where Data
    $rules = array(
        'select'    => null,
        'where'     => null, //not null or null
        'or_where'  => null, //not null or null
        'order'     => null,
        'limit'     => null,
        'pagging'   => null,
    );
    */
    function where($rules)
    {
        if ($rules['select'] != null) {
            $this->db->select($rules['select']);
        }
        if ($rules['where'] != null && $rules['or_where'] != null) {
            $this->db->where($rules['where']);
            $this->db->or_where($rules['or_where']);
        } else if ($rules['where'] != null) {
            $this->db->where($rules['where']);
        } else if ($rules['or_where'] != null) {
            $this->db->or_where($rules['or_where']);
        } else {
            $this->db->where(1);
        }
        if ($rules['order'] != null) {
            $this->db->order_by($rules['order']);
        }
        if ($rules['limit'] != null) {
            $limit = $rules['limit'];
            $this->db->limit($limit['akhir'], $limit['awal']);
        }
        if ($rules['pagging'] != null) {
            $pagging = $rules['pagging'];
            return $this->db->get($this->table, $pagging['num'], $pagging['offset']);
        } else {
            return $this->db->get($this->table);
        }
    }

    /* Rules Attributed Like Data
    $rules = array(
        'select'    => null,
        'like'      => null, //not null or null
        'or_like'   => null, //not null or null
        'order'     => null,
        'limit'     => null,
        'pagging'   => null,
    );
    */
    function like($rules)
    {
        if ($rules['select'] != null) {
            $this->db->select($rules['select']);
        }
        if ($rules['like'] != null && $rules['or_like'] != null) {
            $this->db->like($rules['like']);
            $this->db->or_like($rules['or_like']);
        } else if ($rules['like'] != null) {
            $this->db->like($rules['like']);
        } else if ($rules['or_like'] != null) {
            $this->db->or_like($rules['or_like']);
        } else {
            $this->db->where(1);
        }
        if ($rules['order'] != null) {
            $this->db->order_by($rules['order']);
        }
        if ($rules['limit'] != null) {
            $limit = $rules['limit'];
            $this->db->limit($limit['akhir'], $limit['awal']);
        }
        if ($rules['pagging'] != null) {
            $pagging = $rules['pagging'];
            return $this->db->get($this->table, $pagging['num'], $pagging['offset']);
        } else {
            return $this->db->get($this->table);
        }
    }

    /* Rules Attributed Distinc Data
    $rules = array(
        'select'    => null, //not null
        'where'     => null,
        'order'     => null,
    );
    */
    function distinct($rules)
    {
        $this->db->distinct();
        $this->db->select($rules['select']);
        if ($rules['where'] != null) {
            $this->db->where($rules['where']);
        }
        if ($rules['order'] != null) {
            $this->db->order_by($rules['order']);
        }
        return $this->db->get($this->table);
    }
}
