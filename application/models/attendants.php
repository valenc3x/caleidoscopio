<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendants extends CI_Model {


    public function new_attendant($data=array())
    {
        $this->db->insert('attendants',$data);
        return $this->db->insert_id();
    }


}
