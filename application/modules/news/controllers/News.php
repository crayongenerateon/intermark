<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('News_model');
    }

    public function index($offset = NULL)
    {
        $this->load->library('pagination');
        $this->load->helper('text');
        $data['title'] = 'Indeks Berita';
        $data['news'] = $this->News_model->get(array('limit' => 10, 'offset' => $offset));
        $config['uri_segment']= 3;
        $config['per_page'] = 10;
        $config['base_url'] = site_url('news/index');
        $config['total_rows'] = $this->db->count_all('news');
        $this->pagination->initialize($config);
        $data['main'] = 'news_indeks';
        $this->load->view('layout', $data);
    }

    public function detail($id = NULL, $name = '', $offset=NULL)
    {
        $data['news'] = $this->News_model->get(array('id' => $id));
        $data['main'] = 'news_detail';
        $data['title'] = $data['news']['news_title'];
        $this->load->view('layout', $data);
    }

}

/* End of file News.php */
/* Location: ./application/modules/news/controllers/News.php */