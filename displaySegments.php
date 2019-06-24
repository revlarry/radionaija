<?php


class Displaysegments extends CI_controller
{
    public function segment($code)
    {
        // Save current URL
        $controller =$this->router->class;
        // die($controller );
        $method = $this->router->method;
        $param[]=$code;

        $this->session->set_userdata('test', $code);

        $currURL = $controller.'/'.$method.'/'.$code;  //$param[0];  // set this default

        $this->session->set_userdata('currURL', $currURL);
        $this->session->set_userdata('controller', $controller);
        $this->session->set_userdata('method', $method);

        $result['segment_data'] = $this->broadcasts_model->get_segment_id($code);
        $result['segment_items'] = $this->broadcasts_model->get_segment($code);
        $result['segment_id'] = $code;

        if ($this->session->has_userdata('logged_in')) {
            $result['logged_in'] = $this->session->userdata('logged_in');
        }

        $this->load->view('segments_views', $result);
        
    }
}
