<?php

class Broadcasts extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('datetime', 'Date', 'required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('descrip', 'Description', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('guests', 'Guests', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('hosts', 'Hosts', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('url', 'Programme URL', 'trim|required');
        $this->form_validation->set_rules('photourl', 'Photo URL', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('addbroadcastFrm');
        // $this->load->view('myform');
        } else {
            $this->broadcasts_model->add_broadcast($_POST);
            if ($this->session->flashdata('saved')) {
                echo $this->session->flashdata('saved');
            }
            //  redirect('index.php/broadcasts');
        }
    }

    public function edit($id)
    {
        // $this->load->helper(array('form', 'url'));

        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('datetime', 'Date', 'required');
        // $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|max_length[100]');
        // $this->form_validation->set_rules('descrip', 'Description', 'trim|required|min_length[5]');
        // $this->form_validation->set_rules('guests', 'Guests', 'trim|required|min_length[5]');
        // $this->form_validation->set_rules('hosts', 'Hosts', 'trim|required|min_length[5]');
        // $this->form_validation->set_rules('url', 'Programme URL', 'trim|required');
        // $this->form_validation->set_rules('photourl', 'Photo URL', 'trim|required');

        $record['data'] = $this->broadcasts_model->edit_broadcast($id);
        $segmentId = $record['data']->segment;  // Get segment ID for next line
        $record['segment'] = $this->broadcasts_model->segmentName($segmentId);
        // var_dump($record['segment']);

        // if ($this->form_validation->run() == false) {
        $this->load->view('editbroadcastFrm', $record);
        // $this->load->view('myform');
        // } else {
        //     die($_POST);

        //     $this->broadcasts_model->save_broadcast($_POST);
        //     if ($this->session->flashdata('saved')) {
        //         echo $this->session->flashdata('saved');
        //     }
            //  redirect('index.php/broadcasts');
        //}
    }

    public function save()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('datetime', 'Date', 'required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('descrip', 'Description', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('guests', 'Guests', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('hosts', 'Hosts', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('url', 'Programme URL', 'trim|required');
        $this->form_validation->set_rules('photourl', 'Photo URL', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('editbroadcastFrm');
        } else {
            $this->broadcasts_model->save_broadcast($_POST);
            if ($this->session->flashdata('saved')) {
                echo $this->session->flashdata('saved');
            }
            // $this->load->view('segments_views');
            // print_r($_POST);
            // die;
             redirect('index.php/displaysegments/segment/'.$_POST['segment']);
        }
    }

    public function username_check($str)
    {
        if ($str == 'test') {
            $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');

            return false;
        } else {
            return true;
        }
    }
}
