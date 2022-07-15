<?php
class SusPortugues_model extends CI_Model 
{
     
    public function InsertSusPortugues($data)
    {        
        return $this->db->insert('sus_portugues', $data);

    }
}