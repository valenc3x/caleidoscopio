<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshops extends CI_Model {


    public function all_workshops()
    {
        $query = $this->db->get('workshops');
        $results = array();
        foreach ($query->result() as $row) {
            $results[] = $row;
        }
        return $results;

    }


}
