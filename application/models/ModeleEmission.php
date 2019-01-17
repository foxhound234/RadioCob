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
        else{
            $query = $this->db->select('*')
            ->from('cob_emissions')
            ->where('id', $id)
            ->get();

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $data) {
                    $hasil[] = $data;
                }
            } 
            return $hasil;
        }

    }

    public function RetournerLesEmissions()
    {
        $requete="SELECT * FROM cob_emissions e WHERE e.id  in( select e.id from cob_animation a,cob_emissions e where a.emission=e.id ) ORDER BY id";

        $query=$this->db->query($requete);
        return $query->result();
    }

    public function ModifierEmission($DonnesaModifier,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('cob_emissions',$DonnesaModifier);
    }
    
 
}