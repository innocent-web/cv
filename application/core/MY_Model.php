<?php
class MY_Model extends CI_Model {
    protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
    protected $column = array();
    protected $order = array('id' => 'desc');
	public $_rules = array();
	protected $_timestamps = FALSE;
    
    function __construct() {
		parent::__construct();
	}
    public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}
	
    public function get($id = NULL, $single = FALSE){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		return $this->db->get($this->_table_name)->$method();
	}
       
    public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
	
	public function save($data, $id = NULL){
		
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
		
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}
		
		return $id;
	}
	
	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);
		
		if (!$id) {
			return FALSE;
		}
		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}
    
    public function count_all()
    {
        $this->db->from($this->_table_name);
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->from($this->_table_name);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
    }
    public function save_ajax($data)
    {
        $this->db->insert($this->_table_name, $data);
        return $this->db->insert_id();
    }
 
    /*public function update($where, $data)
    {
        $this->db->update($this->_table_name, $data, $where);
        return $this->db->affected_rows();
    }*/
	public function update($_zTable,$data, $where)
    {
        $this->db->update($this->$_zTable, $data, $where);
        return $this->db->affected_rows();
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table_name);
    }
        
}