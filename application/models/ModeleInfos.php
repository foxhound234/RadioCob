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
        ->from('cob_infos-locales')
        ->where('date_format(date,"%Y-%m-%d")', 'CURDATE()', FALSE)
        ->get();

    return $query->row();
    }
public function AjouterInfo($DonnesInfo)
{
    $this->db->insert('cob_infos-locales',$DonnesInfo);
    return $this->db->insert_id();
}

public function AjoutertxtInfo($DonnestxtInfo)
{
    $this->db->insert('cob_texte-infos-locales',$DonnestxtInfo);
    return $this->db->insert_id();
}

public function GetInfoLocal($id)
{
    $query = $this->db->select('*')
    ->from('cob_texte-infos-locales`')
    ->where('info-locale',$id)
    ->get();

    return $query->result();
}

}