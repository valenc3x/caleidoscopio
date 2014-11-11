<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SpeakerList extends CI_Model {


    public function all_registries()
    {
        $this->db->select('distinct Ponencias, name, last_name, email, university');
        $query = $this->db->get('speaker_list');
        $results = array();
        foreach ($query->result() as $row) {
            $results[] = $row;
        }
        return $results;
    }


}
