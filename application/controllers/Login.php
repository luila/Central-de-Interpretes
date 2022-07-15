<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{	

	 public function __construct(){
	  parent::__construct();
	  $this->load->database();
	  $this->load->model('User_model');
	  $this->load->model('Language_model');
	  $this->load->library('user_agent'); //verifica o dispositivo
	}

	public function index(){
		$this->load->helper('url');
		$this->load->view('login');	
	}

	public function logUser(){
		if($this->input->post('submit') != NULL) // clicou no botão login
		{	
			// POST data
			$postData = $this->input->post();	
			$result = $this->User_model->canLogin($postData['email'], $postData['password']);
			
			if($result){	// entra nesse if se a senha e email estão corretos	 
				$this->load->helper('url'); 
				$this->User_model->setUserSession($postData['email'], $postData['password']);
				$this->User_model->submitLoginTime();	
				

				//'time_submit_login' => $this->User_model->getUserTime(),
				/* redireciona para a pagina principal
				redirect('Main/events?lang=' .  $this->Language_model->getLanguage());
				*/

				//Redireciona para a tela de boas vindas
				redirect('Main/boasVindas?lang=' .  $this->Language_model->getLanguage());
			}
			else{ // exibe erro
				echo"
					<script language='javascript' type='text/javascript'>
						alert('Login e/ou senha incorretos');
						window.location.href='';
					</script>";
			}
		}
		// recarrega a pagina (esse helper deve ser do codeigniter pesquisar depois)
			$this->load->helper('url');
			$this->load->view('login');
	}
}
?>