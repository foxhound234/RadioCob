<?php
class Modeleinterview extends CI_Model {

public function __construct()
{
    $this->load->database();
}
public function AjouterInterview($DonnesInterview){
    $this->db->insert('interview',$DonnesInterview);
    return $this->db->insert_id();
}

  


}