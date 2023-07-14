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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    COMS
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>
<body>
<div class="container" style="margin:5% auto;">
	 <button  class="btn btn-success " class='pull-right'onclick=window.print() id='print-button'>Print</button>
	 <h2>Instructors' Report</h2>
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM edu_background bk inner join instructor ins on bk.ins_id = ins.ins_id  where `major`='$ch_type'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th>Full Name</th>
                      <th>E-mail</th>
                      <th>Age</th>
                      <th>Sex</th>
                      <th>Educationla Level</th>
                      <th>Major</th>
                      <th>Experiance</th>
                     
                    </tr>
                  </thead>
            
                  <tbody>
                  <?php
                  
                   while($rowtable=$table->fetch_assoc()){
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                     ?>
                    <td><?php echo $rowtable['fname']; echo " "; echo $rowtable['mname']; echo " "; echo $rowtable['lname'];?></td>
                    <?php
                      echo "<td>".$rowtable['email']."</td>";
                      echo "<td>".$rowtable['age']."</td>";
                      echo "<td>".$rowtable['sex']."</td>";
                      echo "<td>".$rowtable['edu_level']."</td>"; 
                      echo "<td>".$rowtable['major']."</td>"; 
                      echo "<td>".$rowtable['exp']."</td>"; 
                      ?>
                   
                        
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>

                   
                   
                  </tbody>
                  </table>  
</div>
  <style type="text/css">
@media print {
    #print-button {
        display :  none;
    }

}
</style>

</body>
</html>