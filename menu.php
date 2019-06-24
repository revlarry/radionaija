<?php 
class Menu extends CI_controller {


	public function index() {

		$this->load->view('index_views');

	}

	public function about() {

		$this->load->view('about_views');

	}


	public function features() {

		$this->load->view('features_views');

	}


	public function team() {

		$this->load->view('team_views');

	}

	public function pricing() {

		$this->load->view('pricing_views');

	}

	public function gallery() {

		$this->load->view('gallery_views');

	}

	// public function search() {

	// 	// $this->load->view('s_views');
	// 	// $this->load->view('search_views');
	// 	//echo '<a href="http://localhost/projects/test/index.php/search"> </a>';

	// }

		public function contact() {

		$this->load->view('contact_views');

	}
}





 ?>