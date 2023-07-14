<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$de_user=$_SESSION['uname'];
$de_id=$_SESSION['de_id'];
  $id=$_GET['idd'];
  
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
        
          <div class="col-lg-6 d-none d-lg-block "></div>
          <div class="col-lg-10">
            <div class="p-100">
            <?php 
            include('../connection.php');
            $query=$con->query("SELECT * from course where cou_id='$id'");
             $val=$query->fetch_assoc();
             $valid=$val['course name'];
            ?>
              <div class="card">
              
              <div class="text-center">
              
                <h1 class="h4 text-gray-900 mb-4">ASSIGN INSTRUCTOR FOR COURSE: <?php echo $valid; ?></h1>
                <p style="color:#0000ff;"></p>
              </div>
              <div class="card-body">
                  <form action="addcopro.php" method="post">

                  <div class="form-group">
                      <input type='hidden' name="id" value='<?php echo $id; ?>'>
                     
                    </div>

                <div class="form-group pt-4">
                                            <div class="text-gray-900"><p>INSTRUCTOR NAME</p></div>
                                            
                <div class="form-group">
                                                <select name="ins" class="form-control form-control-lg">
                                          <option></option>
                                                <?php
         include "../connection.php";
         $sql = "SELECT * FROM `instructor`";
         $run=$con->query($sql);
         while($row=$run->fetch_assoc()){
          $id1 = $row['course name'];
         
           ?>
         
          
         
          
            <option value="<?php echo $row['ins_id']; ?>"><?php echo $row['fname']; echo " "; echo $row['mname']; echo " "; echo $row['lname']; ?></option>
                                   

       <?php } ///}
         ?>
                                                   
                                                   
                                                </select>
                                            </div>


                  <button type="submit" class="btn btn-success btn-user btn-block"> SUBMIT</button>
                <div class="form-group pt-2">
                
                 
                    <a href="create.php" class="btn btn-block btn-primary text-white" type="submit">Back</a>
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






  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>

</body>

</html>
