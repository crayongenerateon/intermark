<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class News_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	var $table = 'news';

    // Get From Databases
	function get($params = array())
	{
		if(isset($params['id']))
		{
			$this->db->where('news.news_id', $params['id']);
		}

		if(isset($params['news_title']))
		{
			$this->db->like('news_title', $params['news_title']);
		}

		if(isset($params['date_start']) AND isset($params['date_end']))
		{
			$this->db->where('date_created', $params['date_start']);
			$this->db->or_where('date_created', $params['date_end']);
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
			$this->db->order_by('last_update', 'desc');
		}

		if (isset($params['autocomplete'])) {
			$this->db->select('news_id AS id, news_title as label');			
		}else{
			$this->db->select('news_id, news_title');			
		}

		$this->db->select('news_title, news_description, news_content, news_post_date, news_image, date_created, last_update');
		$res = $this->db->get('news');

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

		if(isset($data['news_id'])) {
			$this->db->set('news_id', $data['news_id']);
		}

		if(isset($data['news_title'])) {
			$this->db->set('news_title', $data['news_title']);
		}

		if(isset($data['news_description'])) {
			$this->db->set('news_description', $data['news_description']);
		}

		if(isset($data['news_content'])) {
			$this->db->set('news_content', $data['news_content']);
		}

		if(isset($data['news_image'])) {
			$this->db->set('news_image', $data['news_image']);
		}

		if(isset($data['news_post_date'])) {
			$this->db->set('news_post_date', $data['news_post_date']);
		}

		if(isset($data['date_created'])) {
			$this->db->set('date_created', $data['date_created']);
		}

		if(isset($data['last_update'])) {
			$this->db->set('last_update', $data['last_update']);
		}

		if (isset($data['news_id'])) {
			$this->db->where('news_id', $data['news_id']);
			$this->db->update('news');
			$id = $data['news_id'];
		} else {
			$this->db->insert('news');
			$id = $this->db->insert_id();
		}

		$status = $this->db->affected_rows();
		return $id;
	}

    // Delete to database
	function delete($id) {
		$this->db->where('news_id', $id);
		$this->db->delete('news');
	}

	public function add_news_image($params = array())
	{
		if (isset($params['news_id'])) {
			$this->db->set('news_news_id', $params['news_id']);
		}

		if (isset($params['name'])) {
			$this->db->set('news_image_path', $params['name']);
		}

		if (isset($params['id'])) {
			$this->db->where('news_image_id', $params['id']);
			$this->db->update('news_image');
			return $params['id'];
		}else{
			$this->db->insert('news_image');
			return $this->db->insert_id();
		}
	}

	public function get_image($params = array())
	{
		if (isset($params['news_id'])) {
			$this->db->where('news_news_id', $params['news_id']);
		}

		if (isset($params['id'])) {
			$this->db->where('news_image_id', $params['id']);
		}

		$ret = $this->db->get('news_image');

		if (isset($params['id'])) {
			return $ret->row_array();
		}else{	
			return $ret->result_array();
		}
	}

	public function delete_image($id = null)
	{
		$ret = false;
		if (!is_null($id)) {
			$this->db->where('news_image_id', $id);
			$this->db->delete('news_image');
			$ret = true;
		}

		return $ret;
	}

}
