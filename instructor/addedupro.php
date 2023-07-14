<?php  
include ('../connection.php');
session_start();
$edu=$_POST['edu'];
$major=$_POST['major'];
$exp=$_POST['exp'];
$ins_id=$_POST['ins_id'];



$con = new mysqli("localhost","root","","coms");
$sql1 = "INSERT INTO `edu_background`(`edu_level`, `exp`, `major`, `ins_id`) VALUES ('".$edu."','".$exp."','".$major."','".$ins_id."') ";
$run1 = $con->query($sql1);



if($run1 ==true)
{
//header("Location:admin/index.php");
                                    echo '<script language="javascript">';
                                    echo 'alert("Educational Background Succefully Added!!!)';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=eduprofile.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>