<?php
class Event_interpreter_model extends CI_Model 
{
        public function GetInterpretorNamesByEventId($eventId)
        {
                $name='';
                $sql = "Select name " .
                       "From event_interpreter ev " .
                       "Join user u on u.id=ev.interpretor_user_id " . 
                       "Where ev.event_id=?";

                $query = $this->db->query($sql, array($eventId));
            
                foreach ($query->result_array() as $row)
                {
                        $name = $name . $row['name'] . ', ';
                }
                
                return substr(trim($name), 0, -1);
        }
}