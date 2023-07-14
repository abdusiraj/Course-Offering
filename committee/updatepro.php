<?php  
include ('../connection.php');
session_start();
$email=$_POST['email'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];





$con = new mysqli("localhost","root","","coms");
$sql = "UPDATE `chair` SET `uname`= '$uname',`pass`='$pass' where `email`='$email'";
$run = $con->query($sql);
$sql1 = "UPDATE `user` SET `username`= '$uname',`pass`='$pass' where `email`='$email'";
$run1 = $con->query($sql1);

if($run && $run1==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Updated Succefully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=profile.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }
?>