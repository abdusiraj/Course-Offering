<?php  
include ('../connection.php');
session_start();
$cou_id=$_POST['cou_id'];
$ins_id=$_POST['ins_id'];





$con = new mysqli("localhost","root","","coms");
$sql1 = "UPDATE `course` SET `assigned`=1,`ins_id`='$ins_id' WHERE `cou_id`='$cou_id'";

$run1 = $con->query($sql1);



if($run1 ==true)
{
//header("Location:admin/index.php");
                                    
                                    echo '<meta http-equiv="refresh" content="0;url=balance.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>