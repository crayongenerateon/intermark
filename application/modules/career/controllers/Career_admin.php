<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Career_admin extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        if ($this->session->userdata('logged_admin') == NULL) redirect('gadmin/auth/login');
        $this->load->model('Career_model');
        $this->load->model('Activity_log_model');
        $this->load->library('upload');
    }

    // Career view in list
    public function index($offset = NULL) {
        $this->load->library('pagination');
        $data['career'] = $this->Career_model->get(array('limit' => 10, 'offset' => $offset));
        $config['base_url'] = site_url('gadmin/career/index');
        $config['total_rows'] = $this->db->count_all('career');
        $this->pagination->initialize($config);

        $data['title'] = 'Karir';
        $data['main'] = 'career/career_list';
        $this->load->view('admin/layout', $data);
    }

    function view($id = NULL) {
        if ($this->Career_model->get(array('id' => $id)) == NULL) {
            redirect('gadmin/career');
        }
        $data['career'] = $this->Career_model->get(array('id' => $id));
        $data['title'] = 'Detail karir';
        $data['main'] = 'career/career_view';
        $this->load->view('admin/layout', $data);
    }

    // Add Career and Update
    public function add($id = NULL) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('career_name', 'Title', 'required');
            $this->form_validation->set_rules('career_description', 'Description', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
            $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

            if ($_POST AND $this->form_validation->run() == TRUE) {
                if ($this->input->post('career_id')) {
                    $params['career_id'] = $this->input->post('career_id');
                    $params['career_input_date'] = $this->input->post('career_input_date');
                } else {
                    $params['career_input_date'] = date('Y-m-d H:i:s');
                }

                $params['career_last_update'] = date('Y-m-d H:i:s');
                $params['user_id'] = $this->session->userdata('user_id_admin');
                $params['career_name'] = $this->input->post('career_name');
                $params['career_description'] = $this->input->post('career_description');
                
                $status = $this->Career_model->add($params);

                // activity log
                $this->Activity_log_model->add(
                        array(
                            'activity_log_date' => date('Y-m-d H:i:s'),
                            'user_id' => $this->session->userdata('user_id_admin'),
                            'activity_log_module' => 'Karir',
                            'activity_log_action' => $data['operation'],
                            'activity_log_info' => 'ID:null;Title:' . $params['career_name']
                        )
                );

                $this->session->set_flashdata('success', $data['operation'] . ' karir berhasil');
                redirect('gadmin/career');
            } else {
                if ($this->input->post('user_id')) {
                    redirect('gadmin/career/edit/' . $this->input->post('career_id'));
                }

                // Edit mode
                if (!is_null($id)) {
                    $data['career'] = $this->Career_model->get(array('id' => $id));
                }

                $data['title'] = $data['operation'] . ' Karir';
                $data['main'] = 'career/career_add';
                $this->load->view('admin/layout', $data);
            }
    }

    // Delete Career
    public function delete($id = NULL) {
        if ($_POST) {
                $this->Career_model->delete($this->input->post('del_id'));
                // activity log
                $this->Activity_log_model->add(
                        array(
                            'activity_log_date' => date('Y-m-d H:i:s'),
                            'user_id' => $this->session->userdata('user_id_admin'),
                            'activity_log_module' => 'Karir',
                            'activity_log_action' => 'Hapus',
                            'activity_log_info' => 'ID:' . $this->input->post('del_id') . ';Title:' . $this->input->post('del_name')
                        )
                );
                $this->session->set_flashdata('success', 'Hapus karir berhasil');
                redirect('gadmin/career');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('gadmin/career/edit/' . $id);
        }
    }

}

/* End of file career_admin.php */
    /* Location: ./application/controllers/career_admin.php */
    