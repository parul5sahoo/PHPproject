<?php

$con= mysqli_connect("localhost", "root","", "ecommerce")  or die(mysqli_error($con));
session_start();       
 $id=$_POST['id'];
 $email= mysqli_real_escape_string($con,$_POST['email']);
 $first_name= mysqli_real_escape_string($con,$_POST['first_name']);
 $last_name= mysqli_real_escape_string($con,$_POST['last_name']);
 $phone=$_POST['phone'];
 $password= mysqli_real_escape_string($con,$_POST['password']);
 $user_registration_query= "insert into users(id, email_id, first_name, last_name, phone) values('$id', '$email', '$first_name', '$last_name', '$phone')";
        
 $user_registration_submit= mysqli_query($con, $user_registration_query)  or
   die(mysqli_error($con));
   echo " user registered successfully. ";
   $_SESSION['email_id'] = $email;
   $_SESSION['id'] = mysqli_insert_id($con);
 ?>
 
 
 


