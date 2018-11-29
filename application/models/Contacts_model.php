<?php class Contacts_model extends CI_model{
	/**
	@return array
	**/
	public function get_all_contacts(){
	$this->db->select("*");
    $this->db->from("contacts");
    $this->db->where("id",1);
    $query=$this->db->get();
    $row=$query->row();
   return $row;
	}
public function addcontact($name){
	$data["name"]=$name;
	$this->db->insert("contacts",$data);
	echo"madeit";
}
}