<?php
class ModeleInfos extends CI_Model {

public function __construct()
{
    $this->load->database();
}

public function getnbinfojour()
{
    $this->db->where('date_format(date,"%Y-%m-%d")', 'CURDATE()', FALSE);
    $this->db->from('cob_infos-locales');

  return $this->db->count_all_results();
}

    public function getIdJour()
    {
        $query = $this->db->select('*')
        ->from('cob_evenements')
        ->where('date_format(date,"%Y-%m-%d")', 'CURDATE()', FALSE)
        ->get();

    return $query->row();
    }
public function AjouterInfo($DonnesInfo)
{
    $this->db->insert('cob_infos-locales',$DonnesInfo);
    return $this->db->insert_id();
}
}