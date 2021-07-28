<?php


require_once 'connect.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $game= $_POST['game'];
  $ticket_number= $_POST['ticket_number'];
  $class= $_POST['class'];
  $number_of_ticket= $_POST['number_of_ticket'];
  $time_booked= $_POST['time_booked'];


  $stmt =$db->prepare("INSERT INTO ticket(game,ticket_number, class,number_of_ticket,time_booked) VALUES(?,?,?,?,?)");
  $stmt->execute(array($game,$ticket_number,$class,$number_of_ticket,$time_booked));

 echo "successsfully booked";
 exit();
 header("location: account.php");
 
}
?>