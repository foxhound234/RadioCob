<?php
class ModeleAnimateur extends CI_Model {

public function __construct()
{
    $this->load->database();
}


public function RetournerAnimateur ($id = NULL)
{
    if($id==NULL)
    {
      $requete=$this->db->get('cob_animateurs');
      return $requete->result();
    }
    $requete=$this->db->get_where('cob_animateurs',array('id'=>$id));
    return $requete->row();  
}
    
}
