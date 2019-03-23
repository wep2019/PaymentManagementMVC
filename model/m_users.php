<?php
function login_employee(){
    include "connection.php";
        $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "SELECT  count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location:index.php?action=view');
            }else{
                header('Location:index.php?action=login');
            }
    
        }
    
    }
    function m_get_pageData(){
        $query = " SELECT * FROM category";
        include 'connection.php';
        $result = mysqli_query($conn , $query);

        $rows = [];

        if($result && mysqli_num_rows($result) > 0){
            while ($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $rows[] = $get_result_to_array;
            }
        }
        return $rows;
    }
function register_imployee() {
    $name = $_POST['username'];
    $pass = $_POST['pwd'];
    $cpass = $_POST['con_pass'];
    if ($pass == $cpass) {
        include "connection.php";
        $query = "INSERT INTO users(username, password) VALUES('$name', '$pass')";
        $insert = mysqli_query($conn, $query);
        return $insert;
    } else {
        header("location: index.php?action=register");
    }
    
}   

?>