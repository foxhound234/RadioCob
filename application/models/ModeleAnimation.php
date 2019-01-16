<?php
class ModeleAnimation extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function AjouterUneAnimations($DonnesAnimations)
{
    $this->db->insert('cob_animation',$DonnesAnimations);
    return $this->db->insert_id();
}


}