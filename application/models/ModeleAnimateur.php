<?php
class ModeleAnimateur extends CI_Model {

public function __construct()
{
    $this->load->database();
}


public function RetournerAnimateur($id = NULL)
{
    if($id==NULL)
    {
         $requete="SELECT * FROM cob_animateurs order by nom asc ";
         $query=$this->db->query($requete);
         return $query->result();
    }
    else{
        return $this->db->get_where('cob_animateurs',array('id'=>$id))->row();
    } 
}
public function getUnAnimateur($id)
{
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
 public function AjoutAnimateur($DonnesAnimateur)
 {
    $this->db->insert('cob_animateurs',$DonnesAnimateur);
    return $this->db->insert_id();
 }
 public function SupprimerAnimateur($id)
 {
     $this->db->where('animateur',$id);
     $this->db->delete('cob_animation');

     $this->db->where('id',$id);
     $this->db->delete('cob_animateurs');
 }
 public function ModifierAnimateur($DonnesaModifier,$id)
 {
     $this->db->where('id', $id);
     $this->db->update('cob_animateurs',$DonnesaModifier);
 }
}
