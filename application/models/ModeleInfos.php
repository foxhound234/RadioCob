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

    public function GetnbTxtlocal($id)
    {
        $this->db->where('info-locale',$id);
        $this->db->from('cob_texte-infos-locales');
        return $this->db->count_all_results();
    }
public function InfoLocal($id)
{
    $query = $this->db->select('*')
    ->from('cob_texte-infos-locales')
    ->where('id', $id)
    ->get();

    if ($query->num_rows() > 0) {
        foreach ($query->result() as $data) {
            $zzz[] = $data;
        }
    } 
    return $zzz;
}

public function ModifieInfo($DonnesInfo,$id)
{
    $this->db->where('id', $id);
    $this->db->update('cob_texte-infos-locales',$DonnesInfo);
}
public function SuppressionInfo($id)
{
    $this->db->where('id', $id);
    $this->db->delete('cob_texte-infos-locales');
}

}