<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COMS</title>
</head>

<body>
<?php  
include ('connection.php');
session_start();
$UserName=$_POST['username'];
$Password=$_POST['password'];
//$pass=md5($Password);



$con = new mysqli("localhost","root","","coms");
$sql = "select * from user where username='".$UserName."' and pass='".$Password."'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$num_row = $result->num_rows;
$usertype = $row['u_type'];
$acivation = $row['status'];

if ($num_row==0)
{
echo '<script type="text/javascript" >alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
exit();
}
else if($usertype=="admin" && $acivation =="1")
{
    $sq= "select * from admin where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['admin_id']=$row['admin_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'admin/home.php\';</script>';
} 
else if($usertype=="instructor" && $acivation =="1")
{
    $sq= "select * from instructor where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['ins_id']=$row['ins_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'instructor/home.php\';</script>';
} 
else if($usertype=="chair" && $acivation =="1")
{
    $sq= "select * from chair where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['cha_id']=$row['cha_id'];
$_SESSION['ch_type']=$row['ch_type'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'chair/home.php\';</script>';
} 
else if($usertype=="dean" && $acivation =="1")
{
    $sq= "select * from dean where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['de_id']=$row['de_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'dean/home.php\';</script>';
}
else if($usertype=="committee" && $acivation =="1")
{
    $sq= "select * from committee where uname='".$UserName."' and pass='".$Password."'";
    $resu = $con->query($sq);
    $row = $resu->fetch_assoc();
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
$_SESSION['com_id']=$row['com_id'];
//header("Location:admin/index.php");*/
echo '<script type="text/javascript">window.location=\'committee/home.php\';</script>';
} 
else{
    echo "Deactivated Account";
    
}
?>

</body>
</html>
