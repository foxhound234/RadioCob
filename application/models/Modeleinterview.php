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

public function getnbinterview()
{
    $requete="SELECT * FROM interview WHERE Datedebut <= CURDATE() AND Datefin >= CURDATE()";
    $query=$this->db->query($requete);
    $rowCount = $query->num_rows();
    return $rowCount;
}
public function getLesinterview()
{
    $requete="SELECT * FROM interview WHERE Datedebut <= CURDATE() AND Datefin >= CURDATE()";
    $query=$this->db->query($requete);
    return $query->result(); 
}


}