<?php
class ModelePartenaires extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function getLespartenaires()
{
    $requete=$this->db->get('cob_partenaires');
    return $requete->result();
}


}