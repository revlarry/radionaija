<?php

class Audioupload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('audioupload_form', array('error' => ' '));
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/audio/';
        $config['allowed_types'] = 'mp3';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $data['linkpath'] = 'uploads/audio/';

            $this->load->view('audioupload_success', $data);
            // $this->load->view('addbroadcastFrm', $data);
        }
    }
}
