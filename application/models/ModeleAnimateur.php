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
    else{
        $query = $this->db->select('*')
        ->from('cob_animateurs')
        ->where('id', $id)
        ->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $animateur[] = $data;
            }
        } 
        return $animateur;
    } 
}
 public function AjoutAnimateur($DonnesAnimateur)
 {
    $this->db->insert('cob_animateurs',$DonnesAnimateur);
    return $this->db->insert_id();
 }
 public function ModifierAnimateur($DonnesaModifier,$id)
 {
     $this->db->where('id', $id);
     $this->db->update('cob_animateurs',$DonnesaModifier);
 }
}
