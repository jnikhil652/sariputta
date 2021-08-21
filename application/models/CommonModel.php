<?php
class CommonModel extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function iudAction($table, $method, $data = array(), $where = array())
    {
        switch ($method) {
            case 'insert':
                $this->db->where($where);
                return $this->db->insert($table, $data);
                break;
            case 'update':
                $this->db->where($where);
                return $this->db->insert($table, $data);
                break;
            case 'delete':
                $this->db->where($where);
                return $this->db->insert($table);
                break;
        }
    }
    public function getData($table, $where, $type)
    {
        $this->db->where($where);
        if ($type == 'array') {
            return $this->db->get($table)->result_array();
        } else {
            return $this->db->get($table)->result();
        }
    }
}
