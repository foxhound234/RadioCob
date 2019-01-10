<?php
class ModeleEvenement extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function AjouterEvenement($DonnesEvenement)
{
    $this->db->insert('cob_evenements',$DonnesEvenement);
    return $this->db->insert_id();
}


}