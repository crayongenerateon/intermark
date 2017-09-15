<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** 
* Dashboard controllers class
 *
 * @package     GROOT
 * @subpackage  Controllers
 * @category    Controllers
 * @author      Sistiandy Syahbana nugraha <sistiandy.web.id>
 */

class Dashboard_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_admin') == NULL) {
            redirect('gadmin/auth/login');
        }
        $this->load->model(array('news/News_model', 'career/Career_model'));
    }

    // Dashboard View
    public function index()
    {
        $data['count_news'] = count($this->News_model->get());
        $data['count_career'] = count($this->Career_model->get());
        $data['title'] = 'Dashboard';
        $data['main'] = 'dashboard/dashboard';
        $this->load->view('admin/layout', $data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
