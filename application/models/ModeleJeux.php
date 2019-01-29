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
     return $this->db->get_where('cob_jeux',array('id'=>$id))->row();
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

      public function SupprimerJeux($id)
      {
          $this->db->where('jeu',$id);
          $this->db->delete('cob_participants');

          $this->db->where('id',$id);
          $this->db->delete('cob_jeux');
      }

      public function LesJeuxActuelle()
    {
        $requete="SELECT * FROM `cob_jeux` WHERE fin > now() and debut <= now()";
        $query=$this->db->query($requete);
        return $query->result();
    }
     
    public function AjouterParticipant($DonnesParticipant)
    {
        $this->db->insert('cob_participants',$DonnesParticipant);
        return $this->db->insert_id();
    }
    
    }