<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_DB extends CI_Model
{
    /**
     * insert a record to a table
     *
     * @param string $table
     * @param array $insert
     * @return void
     */
    public function create($table, $insert)
    {
        return $this->db->insert($table, $insert);
    }
    /****************************************************/
    /**
     * Select a data form a table 
     *
     * @param string $table
     * @param array $columns
     * @param associative array $where
     * @param array $order
     * @return array of objects
     */
    public function read($table, $columns, $where='', $order='')
    {
        $this->db->select($columns);
        if($where) $this->db->where($where);
        if($order) $this->db->order_by($order);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        return FALSE;
    }
    /****************************************************/
    /**
     * Undocumented function
     *
     * @param string $table
     * @param array $columns
     * @param assoc array $where
     * @return void
     */
    public function getSingleRow($table, $columns, $where='')
    {
        $this->db->select($columns);
        if($where) $this->db->where($where);
        $this->db->limit(1);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0)
        {
            return $query->row();
        }
        return FALSE;
    }
    /****************************************************/
    public function update($table, $data, $where)
    {
    	$this->db->where($where);
    	$this->db->update($table, $data);
    	return TRUE;
    }
    /****************************************************/
    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
        return TRUE;
    }
    /****************************************************/
    public function isRecordExist($table, $where)
    {
        $query = $this->db->get_where($table, $where, 1);
        if($query->num_rows > 0)
        {
            return $query->row();
        }
        return FALSE;
    }
    /****************************************************/
}
/* End of model_db */