<?php  
include ('../connection.php');
session_start();

$id=$_GET['id'];

$con = new mysqli("localhost","root","","coms");
$sql1 = "UPDATE `edu_background` SET `approve`=1 WHERE `ins_id`='$id'";

$run1 = $con->query($sql1);


if($run1 ==true)
{
//header("Location:admin/index.php");
                                    
                                    echo '<meta http-equiv="refresh" content="0;url=approval.php" />';
                            }

  else{
      echo "something error occure".$con->error;
  }

?>