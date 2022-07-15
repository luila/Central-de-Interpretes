<?php
class Questionnaire_model extends CI_Model 
{
        /*public function InsertUser($type)
        {
                // configura as colunas do BD
                $data = array(
                        'name' =>  $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'type' => $type,
                        'fatherId' =>  $this->User_model->getUserId()
                );
                
                // realiza o insert no BD
                // o $data tem os valores da coluna do BD
                // a função insert é do codeigniter que realiza inserções no BD
                // o "user" é o nome da tabela
                $this->db->insert('user', $data);          
        }*/

        public function InsertQuestionnaire($data)
        {
               // configura as colunas do BD

                /*
               $data = array[
                //'id' =>  $this->input->post('1'),
                //'idade' => $this->input->post('30'),
                //'password' => $this->input->post('password'),
                //'type' => $type,
                //'fatherId' =>  $this->User_model->getUserId()

                

                'id'=> '2',
                'id_user'=> '4',
                'idade'=> '33',
                'cidade'=> 'Goiânia',
                'estado'=> 'GO',  
                'sexo'=> 'Feminino',
                'trabalho'=> 'sim',
                'salario'=> '1000',
                'escolaridade'=> 'Pós-graduação',
                'surdez'=> 'Não',
                'fluencia_libras'=> 'Não',
                'idade_libras'=> '30',
                'pais_libras'=> 'Não', 
                'pais_surdos'=> 'Não',    
                
                //insert into questionnaire VALUES(1, 4, 30, 'Goiânia', 'GO', 'Feminino', 'sim', 'Sem renda', 'Pós-graduação', 'Não', 'Não', '30', 'Não', 'Não')
                
               ];*/
        
                // realiza o insert no BD
                // o $data tem os valores da coluna do BD
                // a função insert é do codeigniter que realiza inserções no BD
                // o "user" é o nome da tabela

                
                        //$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
                        //print_r ($data); // mostra os dados que foram inseridos no BD - não retirar essa linha
                        //echo "Passou aqui 1";
                        return $this->db->insert('questionnaire', $data);

                        

                        
                


                //echo ($data);

                //$query = $this->db->get('questionnaire');

                
                
                //echo "Passou aqui";
        
                //$this->db->query ("insert into questionnaire (id_user, idade, cidade, estado, sexo, trabalho, salario, escolaridade, surdez, fluecia_libras, idade_libras, pais_libras, pais_surdos) VALUES (1, 4, 30, 'Goiânia', 'GO', 'Feminino', 'sim', 'Sem renda', 'Pós-graduação', 'Não', 'Não', '30', 'Não', 'Não')");
                //( 'questionnaire' , $data); 
        }
}