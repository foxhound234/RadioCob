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


}