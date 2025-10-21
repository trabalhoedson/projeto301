<?php
$servername = "localhost";
$username = "root";
$passoword = "";
$dbname = "todo_list_db";
$conn = new mysqli ($servername, $username, $passowrd, $dbname);
 if($conn->connect_error){
    die ("Erro de conexão:".$conn-> connect_error);
 }
?>