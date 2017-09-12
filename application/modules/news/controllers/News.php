<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
        $data['news'] = $this->News_model->get(array( 'status' => 1, 'limit' => 9, 'offset' => $offset));
        $config['uri_segment']= 3;
        $config['per_page'] = 10;
        $config['base_url'] = site_url('news/index');
        $config['total_rows'] = count($this->News_model->get(array( 'status' => 1)));
        $this->pagination->initialize($config);
        $data['main'] = 'news_indeks';
        $this->load->view('layout', $data);
    }

    public function detail($id = NULL, $name = '', $offset=NULL)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        if ($this->News_model->get(array('id' => $id)) == NULL) {
            redirect('news');
        }

        $data['news'] = $this->News_model->get(array('id' => $id));
        
        if (count($data['news']) == 0) {
            redirect('news');
        }
        
        $data['image'] = $this->News_model->get_image(array('news_id' => $id));
        $data['title'] = $data['news']['news_title'];
        $data['main'] = 'news_detail';
        $this->load->view('layout', $data);
    }

}

/* End of file posts.php */
/* Location: ./application/controllers/news.php */