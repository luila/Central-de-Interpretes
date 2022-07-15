<?php
class User_model extends CI_Model 
{
        public function canLogin($email, $password)
        {
                $q = $this->db
                ->where('email', $email)
                ->where('password', $password)
                ->limit(1)->get('user');

                return ($q->num_rows() > 0);
        }

        public function setUserSession($email, $password)
        {
                $q = $this->db
                ->where('email', $email)
                ->where('password', $password)
                ->limit(1)->get('user');               

                $row = $q->row();
                if (isset($row))
                {
                        $newdata = array(
                                'username'  => $row->name,
                                'email'     => $row->email,
                                'userId'    => $row->id
                        );
                
                        $this->session->set_userdata($newdata);
                }
        }

        public function getUserName()
        {
                return  $this->session->userdata('username'); 
        }

        public function getUserId()
        {
                return  $this->session->userdata('userId');
        }

        //Luíla
        public function getUserTime()
        {              	
                date_default_timezone_set('America/Sao_Paulo');
                //$date = date('Y-m-d H:i');
                $date = date('d-m-Y  H:i:s');
                //echo $date;                
                
                return $date;
        }    

        public function getUserEmail()
        {
                return $this->session->userdata('email');
        }

        public function InsertUser($type)
        {
                // configura as colunas do BD
                $data = array(
                        'name' =>  $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'type' => $type,
                        'fatherId' => $this->User_model->getUserId(),
                        'time_submit_new_user' => $this->User_model->getUserTime(),
                );
                
                // realiza o insert no BD
                // o $data tem os valores da coluna do BD
                // a função insert é do codeigniter que realiza inserções no BD
                // o "user" é o nome da tabela
                $this->db->insert('user', $data);    
                log_message('debug', 'teste depuração');      
        }

        public function getInterpreters()
        {
                $q = $this->db
                ->where('fatherId',  $this->User_model->getUserId())
                ->where('type', 'IN')
                ->get('user');

                return $q->result();
        }

        //Luíla
        public function submitLoginTime()
	{

		$data = array(
			'id_user_login' => $this->User_model->getUserId(),
			'time_submit_login' => $this->User_model->getUserTime(),
                        'name_login'=> $this->User_model->getUserName(),
                        'email_login'=> $this->User_model->getUserEmail(),
                        'user_device'=> $this->User_model->getUserDevice(),
                        'user_platform'=> $this->User_model->getUserPlatform(),



			/*
			'name' =>  $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'type' => $type,
			'fatherId' => $this->User_model->getUserId(),
			*/
			//'time_submit_login' => $this->User_model->getUserTime(),
		);
	
		$this->db->insert('login', $data);    
		//log_message('debug', 'teste depuração');
				
	}

        //Luíla
        public function submitLogoutTime()
	{

		$data = array(
			'id_user_logout' => $this->User_model->getUserId(),
			'time_submit_logout' => $this->User_model->getUserTime(),
                        'name_logout'=> $this->User_model->getUserName(),
                        'email_logout'=> $this->User_model->getUserEmail(),


			/*
			'name' =>  $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'type' => $type,
			'fatherId' => $this->User_model->getUserId(),
			*/
			//'time_submit_login' => $this->User_model->getUserTime(),
		);
	
		$this->db->insert('logout', $data);    
		//log_message('debug', 'teste depura	
	}
        
        //Luíla
        public function getUserDevice()
        {
                $this->load->library('user_agent');

                if ($this->agent->is_mobile())
                {
                        $agent = $this->agent->mobile();
                }
                elseif ($this->agent->is_browser())
                {
                        $agent = $this->agent->browser().' '.$this->agent->version();
                }
                elseif ($this->agent->is_robot())
                {
                        $agent = $this->agent->robot();
                }
                else
                {
                        $agent = 'Indefinido';
                }

                return $agent;

                //echo $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
        }

        public function getUserPlatform()
        {
                $this->load->library('user_agent');
                return $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
        }

}