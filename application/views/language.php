<?php
    $this->load->library('session');

    $languageSet = "pt";

    if(!empty($_GET['lang'])){
        $languageSet = $_GET['lang'];
        $_SESSION['lang'] = $_GET['lang'];
    }  
    Require  $_SERVER['DOCUMENT_ROOT'] . "/language/" . $languageSet . ".php"; 
?>