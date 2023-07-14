<?php  
include ('../connection.php');
session_start();
$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$credit=$_POST['credit'];
$comm='common';



$con = new mysqli("localhost","root","","coms");
$sql1 = "INSERT INTO `course`(`course code`, `course name`, `credit_h`, `major`, `type`) VALUES ('".$ccode."','".$cname."','".$credit."','".$ch_type."','".$comm."') ";
$run1 = $con->query($sql1);



if($run1 ==true)
{
//header("Location:admin/index.php");
                                    
                                    echo '<meta http-equiv="refresh" content="0;url=create.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>