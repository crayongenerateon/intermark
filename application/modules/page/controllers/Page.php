<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Setting_model');
        $this->load->helper('text');
    }

    public function index()
    {
        redirect('layout');
    }

    public function associate_tower()
    {
        $data['main'] = 'page/associate_tower';
        $this->load->view('layout', $data);   
    }

    public function tuscany_residence()
    {
        $data['main'] = 'page/tuscany_residence';
        $this->load->view('layout', $data);
    }

    public function swiss_belhotel()
    {
        $data['main'] = 'page/swiss_belhotel';
        $this->load->view('layout', $data);
    }

    public function merdeka_assembly_hall()
    {
        $data['main'] = 'page/merdeka_assembly_hall';
        $this->load->view('layout', $data);
    }

    public function commercial()
    {
        $data['main'] = 'page/commercial';
        $this->load->view('layout', $data);
    }

    public function detail($id = NULL, $name = '')
    {
        $data['name'] = str_replace('.html', '', $name);
        $data['page'] = $this->Page_model->get(array('id' => $id));
        $data['main'] = 'page_detail';
        $data['title'] = $data['page']['page_name'];
        $this->load->view('layout', $data);
    }
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */
