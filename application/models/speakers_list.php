<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Speakers_List extends CI_Model {


    public function all_registries()
    {
        $this->db->select('name, last_name, email, university, Ponencia');
        $this->db->distinct();
        $query = $this->db->get('speaker_list');
        $results = array();
        foreach ($query->result() as $row) {
            $results[] = $row;
        }
        return $results;
    }


}
