<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Speakers extends CI_Model {


    public function all_speakers()
    {
        $query = $this->db->get('speakers');
        $results = array();
        foreach ($query->result() as $row) {
            $results[] = $row;
        }
        return $results;

    }


}
