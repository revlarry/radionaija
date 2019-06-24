<?php

class Users extends CI_controller
{
    public function index()
    {
        // $data['id']	=$id;
        // $data['play_data'] = $this->broadcasts_model->play_data($id);

        // $this->load->view('player_views',$data);
    }

    public function edit()
    {
        // $data['id']	=$id;
        // $data['play_data'] = $this->broadcasts_model->play_data($id);

        // $this->load->view('player_views',$data);
    }

    public function register()
    {
        // $data['id']	=$id;
        // $data['play_data'] = $this->broadcasts_model->play_data($id);

        $this->load->view('register_views');
    }
}
