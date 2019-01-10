<?php
class ModeleAdmin extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function RetournerAdmin($DonnesConnexion)
{
 $requete=$this->db->get_where('cob_administration',$DonnesConnexion);
 return $requete->row();  
}


}

/* End of file ModelName.php */
