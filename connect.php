<?php
   $username = $_POST['username'];
   $enail = $_POST['email'];
   $password = $_POST['password'];

   if (!empty($username) ||!empty($email) || !empty($password)){
       $host = "localhost";
       $dbusername ="root";
       $dbpassword = "";
       $bdname ="stadium";
       //create a connection
       $conn = new mysqli($host, $dbusername, $dbpassword, $dbname)

       if (mysqli_connect_error()) {
           die('connect Error('. mysqli_connect_errno().') '.mysqli_connect_error());
           
           else{
               $SELECT = "SELECT email FROM registration where email = ? Limit 1";
               $INSERT = "INSERT into registration (username,email,password) values(?,?,?)";

               //prepare statement
               $stmt = $conn->prepare($SELECT);
               $stmt->bind_param("s",$email);
               $stmt->execute();
               $stmt->bind_result($emai);
               $stmt->store_result();
               $rnum = $stmt->num_rows;

               if ($rnum==0){
                   $stmt->close();

                   $stmt = $conn->prepare($INSERT);
                   $stmt->bind_param("sss",$username, $email, $password);
                   $stmt->execute();
                   echo "Registration successful";
                   else{
                       echo "email already used";
                   }
                   $stmt->close();
                   $conn->close();
               }
           }
       }

   }
   else{
       echo "empty fields";
       die();
   }

?>