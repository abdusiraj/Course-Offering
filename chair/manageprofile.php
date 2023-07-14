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
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

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

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
          
        <!-- Nested Row within Card Body -->
        <div class="row">
        
          <div class="col-lg-1 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-10">
            <div class="p-100">
            <?php
            
            ?>
              <div class="card">
              
              <div class="text-center">
              <a class="mb-2 mr-2 btn btn-success" href="manageprofilepro.php?id=<?php echo $id; ?>">Approve</a>
              
                <h1 class="h4 text-gray-900 mb-4">Instructor Profile Detail</h1>
                <p style="color:#0000ff;"></p>
              </div>
              <div class="card-body">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <?php
                    include('../connection.php');
                      $table=$con->query("SELECT * FROM  instructor  where `ins_id`='$id'");
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
                      $table2=$con->query("SELECT * FROM  edu_background  where `ins_id`='$id'");
                      $rowtable2=$table2->fetch_assoc();
                      echo "<td>".$rowtable2['edu_level']."</td>"; 
                      echo "<td>".$rowtable2['major']."</td>"; 
                      echo "<td>".$rowtable2['exp']."</td>"; 
                      ?>
                   
                        
                        
                 <?php  }echo '<tr class="odd gradeX" id="rec">';
                   ?>

                   
                   
                  </tbody>
                  </table>  
                  <form action="setrespro.php" method="post">
                  
                  
                  
                <div class="form-group pt-2">
                
                 
                    <a href="approval.php" class="btn btn-block btn-info text-white" type="submit">Back</a>
                </div>
                
               
            </div>

        </div>
  
        </form>  
                
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<!-- Modal For Update Course -->



  <!-- Modal For Sete Mark  -->


  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>


</body>

</html>
