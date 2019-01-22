<?php
class ModelePartenaires extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getLespartenaires()
    {
        $requete=$this->db->get('cob_partenaires');
        return $requete->result();
    }

    public function AjouterPartenaire($DonneesPartenaire)
    {
        $this->db->insert('cob_partenaires',$DonneesPartenaire);
        return $this->db->insert_id();
    }
    public function SupprimerPartenaire($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('cob_partenaires');
    }
    public function getUnPartenaire($id)
    {
    $query = $this->db->select('*')
    ->from('cob_partenaires')
    ->where('id', $id)
    ->get();

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $data) {
            $Partenaire[] = $data;
        }
    } 
    return $Partenaire;
    }
}