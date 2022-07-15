<?php
class SusLibras_model extends CI_Model 
{
     
    public function InsertSusLibras($data)
    {        
        return $this->db->insert('sus_libras', $data);

    }
}