<?php 

class Broadcasts extends CI_controller {


	public function index(){

	 {
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');			

	     	// $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
	     	$this->form_validation->set_rules('datetime', 'Date', 'required');
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
			//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
			//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

	        if ($this->form_validation->run() == FALSE)
	        {
	                $this->load->view('addbroadcastfrm');
	        } else
	        {
	                $this->load->view('formsuccess');
	        }
	     }
		// $result['segment_data'] = $this->broadcasts_model->get_segment_id($segment_id);
		// $result['segment_items'] = $this->broadcasts_model->get_segment($segment_id);

		// $this->load->view('segments_views',$result);


	}

	public function add(){

		echo "<h1> here now!!</h1>";
		
		var_dump($_POST);
		echo	$_FILES["fileToUpload"]["tmp_name"];
		die;
	}

	public function upload($audiolink){
		
	// Obtain records from data model using $_GET super-global value
		$query = $this->broadcasts_model->audiolink($audiolink);	 

		// use AJAX to update form field with audio link

		// echo "<h3>Found ".$query->num_rows()." records </h3>";

		// $ctr=1;
		// echo "<ol class='list-group'>";
		// foreach ($query->result() as $row) // display detai;s of found records from here
		// {
	 //      echo "<a href='index.php/player/item/".$row->id."'>
	 //      <li class='list-group-item'>".$ctr." ".$row->title."</li>
	 //      </a>";
	 //      $ctr++;
	       



	}

	public function upload_view(){

		$result = $this->load->view('audioUpload_view');
		// var_dump($result);
		// die;
	}


	public function processUpload($myvalue){

 
		echo "<h1> processUpload myvalue = $myvalue</h1>";
		echo $_POST["fileToUpload"];
		//var_dump($result);
		// if(isset($_FILES))
		// {
		// 	echo "OK";
		// 	print_r($_FILES["fileToUpload"]);
		// }
		// else { echo "Not OK";}

		return true;
	}

}





 ?>