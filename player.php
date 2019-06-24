<?php 
class Player extends CI_controller {



	public function item($id){

		$data['id']	=$id;
		$data['play_data'] = $this->broadcasts_model->play_data($id);

		$this->load->view('player_views',$data);

	}




}




 ?>