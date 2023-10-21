<?php
$dsn="mysql:=localhost;dbname=dbname";
$user="root";
$password="";
$options=[];
try{
    $conn = New PDO($dsn,$user,$password,$options);
    // echo "success";
}
catch(PDOException $e){
    echo $e->getMessage();
}



?>