<?php
class EventsDB extends CI_Model{
	function getEvents(){
		$query = $this->db->query("SELECT * FROM Events ORDER BY date DESC");
		return $query->result();
	}
	
	function insertEvents($data){
		$this->db->insert("Events",$data);
	}
}
?>


