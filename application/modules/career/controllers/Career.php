<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Career_model');
        $this->load->model('Setting_model');
        $this->load->helper('text');
    }

    public function index($offset = NULL)
    {
        $this->load->library('pagination');
        $this->load->helper('text');
        $data['title'] = 'Indeks Karir';
        $data['career'] = $this->Career_model->get(array('limit' => 9, 'offset' => $offset));
        $config['uri_segment']= 3;
        $config['per_page'] = 10;
        $config['base_url'] = site_url('career/index');
        $config['total_rows'] = $this->db->count_all('career');
        $this->pagination->initialize($config);
        $data['main'] = 'career_indeks';
        $this->load->view('layout', $data);
    }

    public function detail($id = NULL, $name = '')
    {
        $data['name'] = str_replace('.html', '', $name);
        $data['career'] = $this->Career_model->get(array('id' => $id));
        $data['main'] = 'career_detail';
        $data['title'] = $data['career']['career_name'];
        $this->load->view('layout', $data);
    }
}

/* End of file career.php */
/* Location: ./application/controllers/career.php */
