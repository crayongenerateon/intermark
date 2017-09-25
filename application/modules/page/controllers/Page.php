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
        $data['main'] = 'Associate_tower/mezzanine';
        $data['main'] = 'Associate_tower/2nd-7th_Floor';
        $data['main'] = 'Associate_tower/9th-20th_Floor';
        $data['main'] = 'Associate_tower/8th_Floor';
        $this->load->view('layout', $data);   
    }

    public function tuscany_residence()
    {
        $data['main'] = 'Tuscany_residence/studio';
        $data['main'] = 'Tuscany_residence/1_Bedroom';
        $data['main'] = 'Tuscany_residence/2_Bedroom';
        $data['main'] = 'Tuscany_residence/executive_suite';
        $data['main'] = 'Tuscany_residence/join_unit';
        $this->load->view('layout', $data);
    }

    public function swiss_belhotel()
    {
        $data['main'] = 'Swiss_belhotel/delux';
        $data['main'] = 'Swiss_belhotel/floor';
        $data['main'] = 'Swiss_belhotel/grand_delux';
        $data['main'] = 'Swiss_belhotel/suit_room';
        $this->load->view('layout', $data);
    }

    public function merdeka_assembly_hall()
    {
        $data['main'] = 'Merdeka_assembly/merdeka_ballroom';
        $this->load->view('layout', $data);
    }

    public function commercial()
    {
        $data['main'] = 'Commercial/lease';
        $data['main'] = 'Commercial/tenant';
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
