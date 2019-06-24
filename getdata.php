<?php 
class Getdata extends CI_Controller {

	public function index()
	{
		print_r($_SESSION['logged_in']);

		// Obtain records from data model using $_GET super-global value
		$query = $this->broadcasts_model->search_data($_GET['txt']);	 

		echo "<h3>Found ".$query->num_rows()." records </h3>";

		$ctr=1;
		echo "<ol class='list-group'>";
		foreach ($query->result() as $row) // display detai;s of found records from here
		{
	      echo "<a href='index.php/player/item/".$row->id."'>
	      <li class='list-group-item'>".$ctr." ".$row->title."</li>
	      </a>";
	      $ctr++;
	       
		}
		echo "</ol>";
	}
}
?>




