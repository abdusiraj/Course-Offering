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
                      $table=$con->query("SELECT * FROM m_course where `major`='$ch_type'");
                        //$rowtable=$table->fetch_assoc();
                      ?>
                      <th>Course Code</th>
                      <th>Course Name</th>
                      <th>Credit Hour</th>
                      <th>Assigned Instructor</th>
                      
                     
                    </tr>
                  </thead>
            
                  <tbody>
                  <?php
                  
                   while($rowtable=$table->fetch_assoc()){
                    $idd=$rowtable['ins_id'];
                   //$pp= $rowtable['std_id'];
                    echo '<tr class="odd gradeX" id="rec">';
                 
                      echo "<td>".$rowtable['course code']."</td>";
                      echo "<td>".$rowtable['course name']."</td>";
                      echo "<td>".$rowtable['credit_h']."</td>";
                      $table3=$con->query("SELECT * FROM instructor where `ins_id`='$idd'");
                      $rowtable3=$table3->fetch_assoc()
                      
                      ?>
                   <td><?php echo $rowtable3['fname']; echo " "; echo $rowtable3['mname']; echo " "; echo $rowtable3['lname'];?></td>
                        
                        
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