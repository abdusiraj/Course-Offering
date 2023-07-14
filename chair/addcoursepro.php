<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$ch_user=$_SESSION['uname'];
$cha_id=$_SESSION['cha_id'];
$ch_type=$_SESSION['ch_type'];

?>

<?php  
include ('../connection.php');
session_start();
$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$credit=$_POST['credit'];
$major='major';



$con = new mysqli("localhost","root","","coms");
$sql1 = "INSERT INTO `course`(`course code`, `course name`, `credit_h`, `major`, `type`) VALUES ('".$ccode."','".$cname."','".$credit."','".$ch_type."','".$major."') ";
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