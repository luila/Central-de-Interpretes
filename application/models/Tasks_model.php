<?php
class Tasks_model extends CI_Model 
{

    public function InsertTask1()
    {
        // configura as colunas do BD
        $data = array(
            'id_user_tester' =>  $this->User_model->getUserId(),
            'email_user_tester' => $this->User_model->getUserEmail(),
            'task1_start' => $_SESSION["task1_start"],
            'task1_end' => $_SESSION["task1_end"],
        );
         
        // realiza o insert no BD
        // o $data tem os valores da coluna do BD
        // a função insert é do codeigniter que realiza inserções no BD
        // o "user" é o nome da tabela
        $this->db->insert('task1', $data);    
        //log_message('debug', 'teste depuração');      
    }

    public function InsertTask2()
    {
        // configura as colunas do BD
        $data = array(
            'id_user_tester' =>  $this->User_model->getUserId(),
            'email_user_tester' => $this->User_model->getUserEmail(),
            'task2_start' => $_SESSION["task2_start"],
            'task2_end' => $_SESSION["task2_end"],
        );
         
        // realiza o insert no BD
        // o $data tem os valores da coluna do BD
        // a função insert é do codeigniter que realiza inserções no BD
        // o "user" é o nome da tabela
        $this->db->insert('task2', $data);    
        //log_message('debug', 'teste depuração');      
    }

    public function InsertTask3()
    {
        // configura as colunas do BD
        $data = array(
            'id_user_tester' =>  $this->User_model->getUserId(),
            'email_user_tester' => $this->User_model->getUserEmail(),
            'task3_start' => $_SESSION["task3_start"],
            'task3_end' => $_SESSION["task3_end"],
        );
         
        // realiza o insert no BD
        // o $data tem os valores da coluna do BD
        // a função insert é do codeigniter que realiza inserções no BD
        // o "user" é o nome da tabela
        $this->db->insert('task3', $data);    
        //log_message('debug', 'teste depuração');      
    }

    /*
    public function InsertTCLE($data)
    {        
        return $this->db->insert('tcle', $data);

    }
    */
}