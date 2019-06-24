<?php 

class Featured_model extends CI_model {


	public function get_featured(){

		$query = $this->db->get('featured');

		return $query->result();

	}



	// public function get_segment(){
	// 	$this->db->where('segment','SOC');
	// 	// $this->db->where('segment'=>$segment);
	// 	$query = $this->db->get('broadcasts');

	// 	return $query->result();

	// }



}
 ?>