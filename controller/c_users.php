<?php 
    $data = array();
    flixible_function($data);
    function flixible_function(&$data){
        $function = 'login';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    function view(&$data){
        // $data['student_data'] = m_get_pageData();
        $data['page']="pages/view";
    }
    function login(&$data){
        $data['page']="login";
    }
    function loginValidation(){
        $data=login_employee();
    }



?>