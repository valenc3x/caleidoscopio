<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshop_Registry extends CI_Model {


    public function register($data)
    {
        $attendant_id = $data['attendant'];
        foreach ($data['workshops'] as $workshop_id) {
            $this->db->set('id_attendant',$attendant_id);
            $this->db->set('id_workshop',$workshop_id);
            $this->db->set('date',date('Y-m-d H:s:i'));
            $this->db->insert('workshop_registry');
        }
    }

}
