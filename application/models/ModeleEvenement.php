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

public function GetLesEvenements($id=FALSE)
{
    if($id ===false)
    {
     $requete=$this->db->get('cob_evenements'); 
    }
    else
    {
     return $requete =$this->db->get_where('cob_evenements',array('id'=>$id));
    }
   return $requete;  
}

}