<?php
class TCLE_model extends CI_Model 
{
     
    public function InsertTCLE($data)
    {        
        return $this->db->insert('tcle', $data);

    }
}