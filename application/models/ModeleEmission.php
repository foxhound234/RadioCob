<?php
class ModeleEmission extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function AjouterEmission($DonnesEmissions)
{
    $this->db->insert('cob_emissions',$DonnesEmissions);
    return $this->db->insert_id();
}
public function RetournerEmission($id = NULL)
{
    if($id==NULL)
    {
        $requete="SELECT * FROM cob_emissions e WHERE e.id not in( select e.id from cob_animation a,cob_emissions e where a.emission=e.id ) ORDER BY id";

      $query=$this->db->query($requete);
      return $query->result();
    }
    $requete=$this->db->get_where('cob_emissions',array('id'=>$id));
    return $requete->row();  
}
 

}