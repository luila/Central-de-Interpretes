<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
	public function __construct() 
     {
           parent::__construct(); 
		   $this->load->database();
		   $this->load->model('User_model');
		   $this->load->model('Language_model');
		   $this->load->model('Event_model');
		   $this->load->helper('url');
		   $this->load->helper('form');
		   $this->load->library('form_validation');
		   $this->load->model('Questionnaire_model');
		   $this->load->model('SusPortugues_model');
		   $this->load->model('SusLibras_model');
		   $this->load->model('TCLE_model');
		   $this->load->model('Tasks_model');
		   
	 }
	 
	public function events()
	{	
		$pendingEventsArray = $this->Event_model->GetPendingEvents();
		$data['events'] = $pendingEventsArray;
	
		$a=array();

		foreach ($pendingEventsArray as $row) 
		{
			array_push($a, array("title" => $row->description, "start" => $row->start_date, "end" => $row->end_date));			
		}			
		
		$data['pendingEventArray'] = json_encode($a);

		$this->load->view('header');
		$this->load->view('main', $data);
		$this->load->view('footer');	
	}

	public function logout()
	{	
		$this->User_model->submitLogoutTime(); //Luíla
		$this->load->helper('url');		
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function request()
	{
		$this->load->view('header');
		$this->load->view('request');
		$this->load->view('footer');
	}

    // quando a submissão é true chama essa função
	public function submitNewInterpreter()
	{	
		// Validações
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[50]',
			array('required'      => 'You have not provided %s.'));
		$this->form_validation->set_rules('password', 'Password', 'required', 
			array('required' => 'A senha é obrigatória'));
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', 
			array(
					'required'      => 'You have not provided %s.',
					'is_unique'     => 'Esse %s já está cadastrado.'
			));
	    
		if ($this->form_validation->run() == FALSE)
		{
			// formulario esta invalido.
			$this->interpreter();
		}
		else
		{
			// realiza inserção de dados no BD
			// chama a função INsert user que esta na user_model
			$this->User_model->InsertUser('IN');
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
			//redirect('Main/testTasks?lang=' .  $this->Language_model->getLanguage());
			
		}		
	}

	public function instructionSusLibras()
	{
		$this->load->view('header');
		$this->load->view('susLibrasInstructions');
		$this->load->view('footer');
	}

	// Submit usando paginação
	public function submitSusLibras1()
	{
		$_SESSION["id_user_susLibras"] = $this->User_model->getUserId();
		$_SESSION["q1_susLibras"]=$this->input->post('q1');

		redirect('Main/susLibras2?lang=' .  $this->Language_model->getLanguage());
	}
	
	public function submitSusLibras2()
	{
		$_SESSION["q2_susLibras"]=$this->input->post('q2');
		redirect('Main/susLibras3?lang=' .  $this->Language_model->getLanguage());
		//var_dump($_SESSION);
			
	}

	public function submitSusLibras3()
	{

		$_SESSION["q3_susLibras"]=$this->input->post('q3');
		redirect('Main/susLibras4?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras4()
	{

		$_SESSION["q4_susLibras"]=$this->input->post('q4');
		redirect('Main/susLibras5?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras5()
	{

		$_SESSION["q5_susLibras"]=$this->input->post('q5');
		redirect('Main/susLibras6?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras6()
	{

		$_SESSION["q6_susLibras"]=$this->input->post('q6');
		redirect('Main/susLibras7?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras7()
	{

		$_SESSION["q7_susLibras"]=$this->input->post('q7');
		redirect('Main/susLibras8?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras8()
	{

		$_SESSION["q8_susLibras"]=$this->input->post('q8');
		redirect('Main/susLibras9?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras9()
	{

		$_SESSION["q9_susLibras"]=$this->input->post('q9');
		redirect('Main/susLibras10?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras10()
	{

		$_SESSION["q10_susLibras"]=$this->input->post('q10');
		redirect('Main/susLibras11?lang=' .  $this->Language_model->getLanguage());
		
	}

	public function submitSusLibras11()
	{

		$_SESSION["q11_susAdjLibras"]=$this->input->post('q11');
		//$_SESSION["time_submit_susLibras"] = $this->User_model->getUserTime();

		//var_dump($_SESSION);
		//echo "------------------------------\n";
		

		$data = array(
			'id_user_susLibras' => $_SESSION["id_user_susLibras"],
			//'time_submit_susLibras'=> $_SESSION["time_submit_susLibras"],
			'q1_susLibras' => $_SESSION["q1_susLibras"],
			'q2_susLibras' => $_SESSION["q2_susLibras"],
			'q3_susLibras' => $_SESSION["q3_susLibras"],
			'q4_susLibras' => $_SESSION["q4_susLibras"],
			'q5_susLibras' => $_SESSION["q5_susLibras"],
			'q6_susLibras' => $_SESSION["q6_susLibras"],
			'q7_susLibras' => $_SESSION["q7_susLibras"],
			'q8_susLibras' => $_SESSION["q8_susLibras"],
			'q9_susLibras' => $_SESSION["q9_susLibras"],
			'q10_susLibras' => $_SESSION["q10_susLibras"],
			'q11_susAdjLibras' => $_SESSION["q11_susAdjLibras"],
		);

		//print_r($data);
		//echo "------------------------------\n";
		
		if ($this->SusLibras_model->InsertSusLibras($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());	

            $_SESSION["task3_end"] = $this->User_model->getUserTime();
            
            $this->Tasks_model->InsertTask3();

			redirect('Main/end?lang=' .  $this->Language_model->getLanguage());
					
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";	
			redirect('Main/susLibrasInstructions?lang=' .  $this->Language_model->getLanguage());		
		}
		
	}

	public function submitTCLE()
	{
		$data = array(

			'id_user_tester' => $this->User_model->getUserId(),
			//'time_submit_susPortugues' => $this->User_model->getUserTime(),
			'email_user_tester' => $this->User_model->getUserEmail(),	
			'tcle_accept' => $this->input->post('tcle'),		
		);

		//echo $date;
		//var_dump($_POST);
		//echo "------------------------------\n";
		print_r($data);
		echo "------------------------------\n";
		//var_dump($_SESSION);		

		if($this->TCLE_model->InsertTCLE($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());			
			redirect('Main/questionnaire?lang=' .  $this->Language_model->getLanguage());
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";		
			redirect('Main/boasVindas?lang=' .  $this->Language_model->getLanguage());	
		}
	}


	public function submitSusPortugues()
	{
		$data = array(
			'id_user_susPortugues' => $this->User_model->getUserId(),
			//'time_submit_susPortugues' => $this->User_model->getUserTime(),
			'q1_susPortugues' => $this->input->post('q1'),
			'q2_susPortugues' => $this->input->post('q2'),
			'q3_susPortugues' => $this->input->post('q3'),
			'q4_susPortugues' => $this->input->post('q4'),
			'q5_susPortugues' => $this->input->post('q5'),
			'q6_susPortugues' => $this->input->post('q6'),
			'q7_susPortugues' => $this->input->post('q7'),
			'q8_susPortugues' => $this->input->post('q8'),
			'q9_susPortugues' => $this->input->post('q9'),
			'q10_susPortugues' => $this->input->post('q10'),
			'q11_susAdjPortugues' => $this->input->post('q11'),				
		);

		//echo $date;
		//var_dump($_POST);
		//echo "------------------------------\n";
		//print_r($data);
		//echo "------------------------------\n";
		//var_dump($_SESSION);		

		if ($this->SusPortugues_model->InsertSusPortugues($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());			
			redirect('Main/end?lang=' .  $this->Language_model->getLanguage());
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";		
			redirect('Main/susPortugues?lang=' .  $this->Language_model->getLanguage());	
		}
	}

	// Luíla
	public function submitSociodemographic()
	{
		$data = array(

			'id_user' =>  $this->User_model->getUserId(),	
			'time_submit_questionnaire' => $this->User_model->getUserTime(),				
			'idade' => $this->input->post('idade'),	
			//'idade'=> '33',
			'cidade'=> $this->input->post('cidade'),
			'estado'=>  $this->input->post('estado'),
			'sexo'=> $this->input->post('sexo'),
			'escolaridade'=> $this->input->post('escolaridade'),
			'surdez'=> $this->input->post('surdez'),
			'fluencia_libras'=> $this->input->post('fluencia_libras'),
			'idade_libras'=> $this->input->post('idade_libras'),
			'pais_libras'=> $this->input->post('pais_libras'), 
			'pais_surdos'=> $this->input->post('pais_surdos'), 
		); 

		//$this->Questionnaire_model->InsertQuestionnaire($data);		
		
		if ($this->Questionnaire_model->InsertQuestionnaire($data))
		{
			//echo 'Dados inseridos';		

			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			
			//Application.ProcessMessages;
			//sleep(5);		
			redirect('Main/task1?lang=' .  $this->Language_model->getLanguage());
			
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";	
			redirect('Main/questionnaire?lang=' .  $this->Language_model->getLanguage());		
		}
	}


	public function submitEvent()
	{		
		$this->Event_model->InsertEvent();		

        $_SESSION["task1_end"] = $this->User_model->getUserTime();

		$this->Tasks_model->InsertTask1();

		//echo $date;
		//var_dump($_POST);
		//echo "------------------------------\n";
		//print_r($data);
		//echo "------------------------------\n";
		//var_dump($_SESSION);



		/// aqui	


		redirect('Main/task2?lang=' .  $this->Language_model->getLanguage());
	}

	public function interpreter_validation($interpreterArray)
	{
		foreach ($interpreterArray as $element)
		{
			echo $element . '<br>';
		}

		// if (sizeof($interpreterArray) == 0)
		// {
		// 	$this->form_validation->set_message('interpreterSelect', 'O interprete é obrigatório');
		// 	return false;
		// }
		// else if(sizeof($interpreterArray) > 3)
		// {
		// 	$this->form_validation->set_message('interpreterSelect', 'Selecione no máximo 3 interpretes');
		// 	return false;
		// }

		 return false;
	}
	
	public function interpreter()
	{
		$this->load->view('header');
		$this->load->view('registerInterpreter');
		$this->load->view('footer');
	}

	public function event()
	{
		$data['result'] = $this->User_model->getInterpreters();
		$this->load->view('header');
		$this->load->view('registerEvent', $data);
		$this->load->view('footer');
	}


	public function report()
	{
		$this->load->view('header');
		$this->load->view('report');
		$this->load->view('footer');
	}

	public function slislist()
	{
		$data['result'] = $this->User_model->getInterpreters();
		$this->load->view('header');
		$this->load->view('slislist', $data);
		$this->load->view('footer');
	}

	//Luíla
	public function eventlist()
	{
		$pendingEventsArray = $this->Event_model->GetPendingEvents();
		$data['solicitation'] = $pendingEventsArray;
	
		$a=array();

		foreach ($pendingEventsArray as $row) 
		{
			array_push($a, array("title" => $row->description, "start" => $row->start_date, "end" => $row->end_date));			
		}			
		
		$data['pendingEventArray'] = json_encode($a);

		$data['solicitation'] = $this->User_model->getInterpreters();
		$this->load->view('header');
		$this->load->view('eventlist', $data);
		$this->load->view('footer');
	}
	
	// Luíla
	public function task1()
	{
		$this->load->view('header');
		$this->load->view('task1');
		$this->load->view('footer');
	}

	// Luíla
	public function task2()
	{
		$this->load->view('header');
		$this->load->view('task2');
		$this->load->view('footer');
	}

	// Luíla
	public function task3()
	{
		$this->load->view('header');
		$this->load->view('task3');
		$this->load->view('footer');
	}

	// Luíla
	public function end()
	{
		$this->load->view('header');
		$this->load->view('end');
		$this->load->view('footer');
	}

	// Luíla
	public function questionnaire()
	{
		$this->load->view('header');
		$this->load->view('sociodemographic');
		$this->load->view('footer');
	}

	public function susLibrasInstructions()
	{
		$this->load->view('header');
		$this->load->view('susLibrasInstructions');
		$this->load->view('footer');
	}

	public function susLibras1()
	{
		$this->load->view('header');
		$this->load->view('susLibras1');
		$this->load->view('footer');
	}

	public function susLibras2()
	{
		$this->load->view('header');
		$this->load->view('susLibras2');
		$this->load->view('footer');
	}

	public function susLibras3()
	{
		$this->load->view('header');
		$this->load->view('susLibras3');
		$this->load->view('footer');
	}

	public function susLibras4()
	{
		$this->load->view('header');
		$this->load->view('susLibras4');
		$this->load->view('footer');
	}

	public function susLibras5()
	{
		$this->load->view('header');
		$this->load->view('susLibras5');
		$this->load->view('footer');
	}

	public function susLibras6()
	{
		$this->load->view('header');
		$this->load->view('susLibras6');
		$this->load->view('footer');
	}

	public function susLibras7()
	{
		$this->load->view('header');
		$this->load->view('susLibras7');
		$this->load->view('footer');
	}

	public function susLibras8()
	{
		$this->load->view('header');
		$this->load->view('susLibras8');
		$this->load->view('footer');
	}

	public function susLibras9()
	{
		$this->load->view('header');
		$this->load->view('susLibras9');
		$this->load->view('footer');
	}

	public function susLibras10()
	{
		$this->load->view('header');
		$this->load->view('susLibras10');
		$this->load->view('footer');
	}

	public function susLibras11()
	{
		$this->load->view('header');
		$this->load->view('susLibras11');
		$this->load->view('footer');
	}
	
	// Luíla
	public function susPortugues()
	{
		$this->load->view('header');
		$this->load->view('susPortugues');
		$this->load->view('footer');
	}

	public function boasVindas()
	{
		$this->load->view('header');
		$this->load->view('boasVindas');
		$this->load->view('footer');
	}
	
	/*
	public function newPopup()
	{
		varWindow = window.open ('popup.php', 'popup')
	}
	*/
}