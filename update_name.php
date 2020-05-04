<?php
 $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
 session_start();
 $first_name=$_GET['first_name'];
 $update_name_query= "UPDATE users SET first_name = '$first_name' WHERE id= '$id' " ;
 $update_name_result= mysqli_query($con, $update_name_qwery) or die(mysqli_error($con));
 echo "Name Updated";

