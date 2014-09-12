<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Speaker_Registry extends CI_Model {


    public function register($data)
    {
        $attendant_id = $data['attendant'];

        foreach ($data['speakers'] as $speaker_id) {
            $this->db->set('id_attendant',$attendant_id);
            $this->db->set('id_speaker',$speaker_id);
            $this->db->set('date',date('Y-m-d H:s:i'));
            $this->db->insert('speaker_registry');
        }
    }

}
