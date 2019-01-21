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
    
    public function GetLesJeux($id=NULL)
    {
    if($id==NULL)
    {
        $requete=$this->db->get('cob_jeux');
        return $requete->result();
    }
    else
    {
     $requete =$this->db->get_where('cob_jeux',array('id'=>$id));
     $query=$this->db->query($requete);
     return $query->row();
    } 
    }
    public function getUnJeux($id)
    {
    $query = $this->db->select('*')
    ->from('cob_jeux')
    ->where('id', $id)
    ->get();

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $data) {
            $Jeux[] = $data;
        }
    } 
    return $Jeux;

    }
    public function ModifierUnJeux($DonnesJeux,$id)
    {
         $this->db->where('id', $id);
        $this->db->update('cob_jeux',$DonnesJeux);
    }


    }