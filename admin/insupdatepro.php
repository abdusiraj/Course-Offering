<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$addres=$_POST['addres'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];





$con = new mysqli("localhost","root","","coms");
$sql = "UPDATE `instructor` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`address`='$addres',`email`='$email',`age`='$age',`sex`='$sex',`uname`= '$uname',`pass`='$pass' WHERE `ins_id`='$id'";
$run = $con->query($sql);

$sql1 = "UPDATE `user` SET `username`= '$uname',`pass`='$pass' where `email`='$email'";
$run1 = $con->query($sql1);

if($run==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=instructor.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>