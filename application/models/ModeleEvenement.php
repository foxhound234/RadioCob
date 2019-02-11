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

public function GetLesEvenements($id=NULL)
{
    if($id==NULL)
    {
        $requete=$this->db->get('cob_evenements');
        return $requete->result();
    }
    else
    {
     $requete =$this->db->get_where('cob_evenements',array('id'=>$id));
     $query=$this->db->query($requete);
     return $query->row();
    } 
}

public function getUnEvenement($id)
{
    $query = $this->db->select('*')
    ->from('cob_evenements')
    ->where('id', $id)
    ->get();

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $data) {
            $Evenement[] = $data;
        }
    } 
    return $Evenement;

}
public function SupprimerEvenement($id)
{
    $this->db->where('id',$id);
    $this->db->delete('cob_evenements');
}
public function ModifierUnEvenement($DonnesEvenement,$id)
{
    $this->db->where('id', $id);
    $this->db->update('cob_evenements',$DonnesEvenement); 
}
public function LesEvenements()
{
    $aujourdhui = date("Y-m-d H:i:s");
    $requete="SELECT * FROM cob_evenements WHERE debut <= CURDATE() AND fin >= CURDATE()";
    $query=$this->db->query($requete);
    return $query->result();
}

public function nbEvenement(){
    $requete="SELECT * FROM cob_evenements WHERE debut <= CURDATE() AND fin >= CURDATE()";
    $query=$this->db->query($requete);
    return $query->num_rows();
}

}