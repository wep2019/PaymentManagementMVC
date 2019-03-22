<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'paymentmanagement';

    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn) {
        echo "you are lose";
    }

?>