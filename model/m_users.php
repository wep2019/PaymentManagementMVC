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
    



?>