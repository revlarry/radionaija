<?php 

class About extends CI_controller {

	public function index(){

		$this->load->view('about_views');

	}



	public function mytable(){

		$this->load->view('mytable_views');

	}



}



 ?>