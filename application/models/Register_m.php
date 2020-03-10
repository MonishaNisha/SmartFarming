<?php
class Register_m extends CI_Model{

	function insertowner($data){
		$this->db->insert('oregister',$data);
		return true;
		}	
	function insertplanter($data){
		$this->db->insert('pregister',$data);
		return true;
	}
	function pupdate($data){
		$this->db->where('email', $email);
		$this->db->update('pregister',$data);
		return true;
	}

function can_login($email, $password){
	$this->db->where('email', $email);
	$this->db->where('pwd', $password);
	$query = $this->db->get('oregister');
	if($query->num_rows() > 0 ){
		
				return true;
		
		}
		else
		{
				return false;
		}
}
function can_login1($email, $password){
	$this->db->where('email', $email);
	$this->db->where('pwd', $password);
	$query = $this->db->get('pregister');
	if($query->num_rows() > 0 ){
		
				return $query->row();
		
		}
		else
		{
				return false;
		}
}

}
?>