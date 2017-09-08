<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Career_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    var $table = 'career';
    
    // Get From Databases
    function get($params = array())
    {
        if(isset($params['id']))
        {
            $this->db->where('career.career_id', $params['id']);
        }
        
        if(isset($params['user_id']))
        {
            $this->db->where('career.user_id', $params['user_id']);
        }

        if(isset($params['career_name']))
        {
            $this->db->like('career_name', $params['career_name']);
        }

        if(isset($params['limit']))
        {
            if(!isset($params['offset']))
            {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if(isset($params['order_by']))
        {
            $this->db->order_by($params['order_by'], 'desc');
        }
        else
        {
            $this->db->order_by('career_last_update', 'desc');
        }

        $this->db->select('*');
        $this->db->join('g_user', 'g_user.user_id = career.user_id');
        $res = $this->db->get('career');

        if(isset($params['id']))
        {
            return $res->row_array();
        }
        else
        {
            return $res->result_array();
        }
    }

    // Add and update to database
    function add($data = array()) {
        
         if(isset($data['career_id'])) {
            $this->db->set('career_id', $data['career_id']);
        }
        
         if(isset($data['career_name'])) {
            $this->db->set('career_name', $data['career_name']);
        }
        
         if(isset($data['career_description'])) {
            $this->db->set('career_description', $data['career_description']);
        }
        
         if(isset($data['career_input_date'])) {
            $this->db->set('career_input_date', $data['career_input_date']);
        }
        
         if(isset($data['career_last_update'])) {
            $this->db->set('career_last_update', $data['career_last_update']);
        }
        
         if(isset($data['user_id'])) {
            $this->db->set('user_id', $data['user_id']);
        }
        
        if (isset($data['career_id'])) {
            $this->db->where('career_id', $data['career_id']);
            $this->db->update('career');
            $id = $data['career_id'];
        } else {
            $this->db->insert('career');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }
    
    // Delete to database
    function delete($id) {
        $this->db->where('career_id', $id);
        $this->db->delete('career');
    }
    
}