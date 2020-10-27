<?php
  $phone = $POST['phone']; 
   $email = $POST['email']; 
    $your_name = $POST['your_name']; 
     $message = $POST['message']; 


  //Database connection//
     $connn=new mysqli('localhost','root','','test');
     if($conn->connect_error){
     	die('connection Failed  :'.$conn->connect_error);

     }else{
     	$stmt = $conn->prepare("insert into registration(phone,email,your_name)
     		values(?,?,?)");
     	$stmt->bind_param("ssi", $phone,$email,$your_name);
     	echo"registration successfully....";
     	$stmt->close();
     	$conn->close();
     }
?>