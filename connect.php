<?php
 $host = 'localhost';
 $dbname = 'stadium';
 $username= "root";
 $password = "";


 try{
     $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     echo "connection succesful\n";

 }
 catch (PDOException $e){
     echo "unable to connect".$e->getmessage();
 }

?>