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

		   
		   //Carrega as views de paginação
		   /*
		   $this->load->view('susLibras2');
		   $this->load->view('susLibras3');
		   $this->load->view('susLibras4');
		   $this->load->view('susLibras5');
		   $this->load->view('susLibras6');
		   $this->load->view('susLibras7');
		   $this->load->view('susLibras8');
		   $this->load->view('susLibras9');
		   $this->load->view('susLibras10');
		   $this->load->view('susLibras11');
		   */
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
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function navigation()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	} 

    // quando a submissão é true chama essa função
	public function submitNewInterpreter()
	{	
		// Validações
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[15]',
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
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
		}		
	}

	//--------------- Fucionando sem paginação
	/*
	public function submitSusLibras()
	{
		$data = array(
			//'id_user' => $this->User_model->getUserId(),
			/*'id_user_susPortugues' => '1000',
			'q1_susPortugues' => '1',
			'q2_susPortugues' => '2',
			'q3_susPortugues' => '3',
			'q4_susPortugues' => '4',
			'q5_susPortugues' => '5',
			'q6_susPortugues' => '6',
			'q7_susPortugues' => '7',
			'q8_susPortugues' => '8',
			'q9_susPortugues' => '9',
			'q10_susPortugues' => '10',
			

			'id_user_susLibras' => $this->User_model->getUserId(),
			'q1_susLibras' => $this->input->post('q1'),
			'q2_susLibras' => $this->input->post('q2'),
			'q3_susLibras' => $this->input->post('q3'),
			'q4_susLibras' => $this->input->post('q4'),
			'q5_susLibras' => $this->input->post('q5'),
			'q6_susLibras' => $this->input->post('q6'),
			'q7_susLibras' => $this->input->post('q7'),
			'q8_susLibras' => $this->input->post('q8'),
			'q9_susLibras' => $this->input->post('q9'),
			'q10_susLibras' => $this->input->post('q10'),
			'q11_susAdjLibras' => $this->input->post('q11'),
			
		);

		
		var_dump($_POST);
		echo "------------------------------\n";
		print_r($data);
		echo "------------------------------\n";
		var_dump($_SESSION);
		
		

		if ($this->SusLibras_model->InsertSusLibras($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());			
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";			
		}
	}*/

	// Submit usando paginação
	public function submitSusLibras1()
	{
		$data = array(
			'id_user_susLibras' => $this->User_model->getUserId(),
			'q1_susLibras' => $this->input->post('q1'),			
		);

		
		var_dump($_POST);
		echo "------------------------------\n";
		print_r($data);
		echo "------------------------------\n";
		var_dump($_SESSION);
		

		if ($this->SusLibras_model->InsertSusLibras($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());		
			redirect('Main/susLibras2?lang=' .  $this->Language_model->getLanguage());		
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";			
		}
	}
	
	public function submitSusLibras2()
	{
		$data = array(
			'q2_susLibras' => $this->input->post('q2'),			
		);

		
		var_dump($_POST);
		echo "------------------------------\n";
		print_r($data);
		echo "------------------------------\n";
		var_dump($_SESSION);
		

		if ($this->SusLibras_model->InsertSusLibras($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			//redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());		
			redirect('Main/susLibras2?lang=' .  $this->Language_model->getLanguage());		
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";			
		}
	}

	public function submitSusPortugues()
	{
		$data = array(
			//'id_user' => $this->User_model->getUserId(),
			/*'id_user_susPortugues' => '1000',
			'q1_susPortugues' => '1',
			'q2_susPortugues' => '2',
			'q3_susPortugues' => '3',
			'q4_susPortugues' => '4',
			'q5_susPortugues' => '5',
			'q6_susPortugues' => '6',
			'q7_susPortugues' => '7',
			'q8_susPortugues' => '8',
			'q9_susPortugues' => '9',
			'q10_susPortugues' => '10',
			*/
			'id_user_susPortugues' => $this->User_model->getUserId(),
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

		/*
		var_dump($_POST);
		echo "------------------------------\n";
		print_r($data);
		echo "------------------------------\n";
		var_dump($_SESSION);
		*/

		if ($this->SusPortugues_model->InsertSusPortugues($data))
		{
			echo "<script language=javascript>alert( 'Respostas gravadas com sucesso!' );</script>";
			//Application.ProcessMessages;
			//sleep(5);		
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());			
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";			
		}
	}

	// Luíla
	public function submitSociodemographic()
	{
		/*
		$data = array(
			//'id' =>  $this->input->post('1'),
			//'idade' => $this->input->post('30'),
			//'password' => $this->input->post('password'),
			//'type' => $type,
			//'fatherId' =>  $this->User_model->getUserId()

			
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
			
		); */

			
            //var_dump($_POST);
			//echo "------------------------------\n";
			//var_dump($_SESSION);


			
        

		$data = array(

			'id_user' =>  $this->User_model->getUserId(),		
			'idade' => $this->input->post('idade'),	
			//'idade'=> '33',
			'cidade'=> $this->input->post('cidade'),
			'estado'=>  $this->input->post('estado'),
			'sexo'=> $this->input->post('sexo'),
			//'trabalho'=> $this->input->post('trabalho'),
			//'salario'=> $this->input->post('salario'),
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
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
			
		}
		else
		{			
			//echo 'erro ao inserir dados';
			echo "<script language=javascript>alert( 'Falha ao gravar respostas.' );</script>";			
		}


	}


	public function submitEvent()
	{
		
		/*
		código bugado: validation->run está avaliando para false
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->event();
		}
		else
		{
			
			$this->Event_model->InsertEvent();
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
		}*/
		$this->Event_model->InsertEvent();
			redirect('Main/navigation?lang=' .  $this->Language_model->getLanguage());
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
	public function questionnaire()
	{
		$this->load->view('header');
		$this->load->view('sociodemographic');
		$this->load->view('footer');
	}

	// Luíla
	/*
	public function susLibras()
	{
		$this->load->view('header');
		$this->load->view('susLibras1');
		$this->load->view('footer');
	}*/

	public function susLibras()
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


	/*
	public function newPopup()
	{
		varWindow = window.open ('popup.php', 'popup')
	}
	*/
}