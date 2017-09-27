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

    //associate tower
    public function mezzanine()
    {
        $data['main'] = 'Associate_tower/mezzanine';
        $this->load->view('layout', $data);
    }

    public function low_zone()
    {
        $data['main'] = 'Associate_tower/2nd-7th_Floor';
        $this->load->view('layout', $data);   
    }

    public function high_zone()
    {
        $data['main'] = 'Associate_tower/9th-20th_Floor';
        $this->load->view('layout', $data);
    }

    public function eigthFloor()
    {
        $data['main'] = 'Associate_tower/8th_Floor';
        $this->load->view('layout', $data);
    }

    //tuscany residence
    public function studio_type()
    {
        $data['main'] = 'Tuscany_residence/studio';
        $this->load->view('layout', $data);
    }

    public function one_bedroom()
    {
        $data['main'] = 'Tuscany_residence/1+1_Bedroom';
        $this->load->view('layout', $data);
    }

    public function two_bedroom()
    {
        $data['main'] = 'Tuscany_residence/2_Bedroom';
        $this->load->view('layout', $data);
    }

    public function executive_suite()
    {
        $data['main'] = 'Tuscany_residence/executive_suite';
        $this->load->view('layout', $data);
    }

    public function joint_unit()
    {
        $data['main'] = 'Tuscany_residence/joint_unit';
        $this->load->view('layout', $data);
    }

    //swiss belhotel
    public function delux()
    {
        $data['main'] = 'Swiss_belhotel/delux';
        $this->load->view('layout', $data);
    }

    public function floor()
    {
        $data['main'] = 'Swiss_belhotel/floor';
        $this->load->view('layout', $data);
    }

    public function grand_delux()
    {
        $data['main'] = 'Swiss_belhotel/grand_delux';
        $this->load->view('layout', $data);
    }

    public function suit_room()
    {
        $data['main'] = 'Swiss_belhotel/suit_room';
        $this->load->view('layout', $data);
    }

    //merdeka assembly hall
    public function merdeka_ballroom()
    {
        $data['main'] = 'Merdeka_assembly/merdeka_ballroom';
        $this->load->view('layout', $data);
    }

    //commercial
    public function tenant()
    {   
        $data['main'] = 'Commercial/tenant';
        $this->load->view('layout', $data);
    }

    public function lease()
    {
        $data['main'] = 'Commercial/lease';
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
