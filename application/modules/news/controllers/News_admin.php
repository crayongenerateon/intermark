<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class News_admin extends CI_Controller {

    public function __construct() {
        parent::__construct(TRUE);
        if ($this->session->userdata('logged_admin') == NULL) {
            header("Location:" . site_url('gadmin/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }
        $this->load->model(array('News_model', 'activity_log/Activity_log_model'));
    }

    // News view in list
    public function index($offset = NULL) {
        $this->load->library('pagination');
        $data['news'] = $this->News_model->get(array('limit' => 10, 'offset' => $offset));
        $config['base_url'] = site_url('gadmin/news/index');
        $config['total_rows'] = $this->db->count_all('news');
        $this->pagination->initialize($config);

        $data['title'] = 'Berita';
        $data['main'] = 'news/news_list';
        $this->load->view('admin/layout', $data);
    }

    function view($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        
        if ($this->News_model->get(array('id' => $id)) == NULL) {
            redirect('gadmin/news');
        }

        $data['news'] = $this->News_model->get(array('id' => $id));
        
        if (count($data['news']) == 0) {
            redirect('gadmin/news');
        }
        
        $data['image'] = $this->News_model->get_image(array('news_id' => $id));
        $data['title'] = 'Detail berita';
        $data['main'] = 'news/news_view';
        $this->load->view('admin/layout', $data);
    }

    // Add News and Update
    public function add($id = NULL) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'Name ', 'required');
        $this->form_validation->set_rules('news_description', 'Description ', 'required');
        $this->form_validation->set_rules('news_content', 'Content', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST AND $this->form_validation->run() == TRUE) {

            if (!empty($_FILES['inputGambar']['name'])) {
                $params['news_image'] = $this->do_upload();
            } elseif ($this->input->post('inputGambarExisting')) {
                $params['news_image'] = $this->input->post('inputGambarExisting');
            } else {
                if ($this->input->post('news_id')) {
                    $params['news_image'] = $this->input->post('inputGambarCurrent');
                } else {
                    $params['news_image'] = '';
                }
            }

            if ($this->input->post('news_id')) {
                $params['news_id'] = $this->input->post('news_id');
            } else {
                $params['date_created'] = date('Y-m-d H:i:s');
            }

            $params['user_id'] = $this->session->userdata('user_id_admin');
            $params['last_update'] = date('Y-m-d H:i:s');
            $params['news_title'] = $this->input->post('news_title');
            $params['news_description'] = $this->input->post('news_description');
            $params['news_content'] = stripslashes($this->input->post('news_content'));

            $status = $this->News_model->add($params);


            $this->upload_image($status);


            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Berita',
                    'log_action' => $data['operation'],
                    'log_info' => 'ID:'.$status.';Title:' . $params['news_title']
                    )
                );

            $this->session->set_flashdata('success', $data['operation'] . ' berita berhasil');
            redirect('gadmin/news/view/'.$status);
        } else {

            // Edit mode
            if (!is_null($id)) {
                $data['news'] = $this->News_model->get(array('id' => $id));
                if (count($data['news']) == 0) {
                    redirect('gadmin/news');
                }

                $data['image'] = $this->News_model->get_image(array('news_id' => $id));
            }

            $data['title'] = $data['operation'] . ' Berita';
            $data['main'] = 'news/news_add';
            $this->load->view('admin/layout', $data);
        }
    }

    private function upload_image($id = null)
    {
        if (is_null($id)) {
            return false;
        }


        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|JPG';
        
        $this->load->library('upload', $config);

        $files = $_FILES['newsImage'];

        $no = 0;

        $files = $_FILES['newsImage'];
        $cpt = count($_FILES['newsImage']['name']);
        
        for ($i = 0; $i < $cpt; $i++) {

            $_FILES['newsImage']['name'] = $files['name'][$i];
            $_FILES['newsImage']['type'] = $files['type'][$i];
            $_FILES['newsImage']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['newsImage']['error'] = $files['error'][$i];
            $_FILES['newsImage']['size'] = $files['size'][$i];

            $this->upload->do_upload('newsImage');

            $data = $this->upload->data();

            $input['name'] = $data['file_name'];
            $input['news_id'] = $id;

            if ($i == 0) {
                $cover['news_id'] = $id;
                $cover['news_image'] =  base_url('uploads'). '/' . $input['name'];
                $this->News_model->add($cover);
            }

            $error = $this->upload->display_errors();

            $this->News_model->add_news_image($input);
        }
        
        return true;
    }

    // Delete News
    public function delete($id = NULL) {
        if ($_POST) {
            $this->News_model->delete($this->input->post('del_id'));

            // activity log
            $this->Activity_log_model->add(
                array(
                    'log_date' => date('Y-m-d H:i:s'),
                    'user_id' => $this->session->userdata('user_id_admin'),
                    'log_module' => 'Berita',
                    'log_action' => 'Hapus',
                    'log_info' => 'ID:' . $this->input->post('del_id') . ';Title:' . $this->input->post('del_name')
                    )
                );
            $this->session->set_flashdata('success', 'Hapus berita berhasil');
            redirect('gadmin/news');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('gadmin/news/edit/' . $id);
        }
    }

    public function delete_image($id = null, $news_id = null)
    {

        if (is_null($id) OR is_null($news_id)) {
            redirect('gadmin/news/');
        }


        $news_image = $this->News_model->get_image(array('id' => $id, 'news_id' => $news_id));

        if (count($news_image) == 0) {

            $this->session->set_flashdata('success', 'Foto tidak ditemukan');
            redirect('gadmin/news/view/'.$news_id);
            return false;

        }

        $ret = $this->News_model->delete_image($id);

        $this->Activity_log_model->add(
            array(
                'log_date' => date('Y-m-d H:i:s'),
                'user_id' => $this->session->userdata('user_id_admin'),
                'log_module' => 'Foto Berita',
                'log_action' => 'Hapus',
                'log_info' => 'ID:' . $id . ';'
                )
            );

        
        $this->session->set_flashdata('success', 'Hapus foto berita berhasil');
        redirect('gadmin/news/view/'.$news_id);
    }

}

/* End of file News.php */
/* Location: ./application/controllers/gadmin/News.php */
