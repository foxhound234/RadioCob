<?php
class ModeleJeux extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function AjouterJeux($DonnesJeux)
    {
        $this->db->insert('cob_jeux',$DonnesJeux);
        return $this->db->insert_id();
    }


    }