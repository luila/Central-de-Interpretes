
<?php
class Language_model extends CI_Model 
{
        public function __construct() 
        {
            parent::__construct(); 
            $this->load->library('session');
            $this->load->helper('url');
        }
	 
        public function getLanguage()
        {
           if(!isset($_SESSION['lang'])) 
           {
                $this->Language_model->setLanguage('pt');
           }

            return $this->session->userdata('lang');
        }

        public function setLanguage($lang)
        {
            $this->session->set_userdata('lang', $lang);
        }
}