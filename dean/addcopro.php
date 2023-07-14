<?php  
include ('../connection.php');
session_start();
$id=$_POST['id'];
$ins=$_POST['ins'];





$con = new mysqli("localhost","root","","coms");
$sql1 = "UPDATE `course` SET `assigned`=1,`ins_id`='$ins' WHERE `cou_id`='$id'";

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