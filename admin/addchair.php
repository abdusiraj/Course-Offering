<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$adm_user=$_SESSION['uname'];
$admin_id=$_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin |ADD Chair
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

<body class="">
  <!-- Navbar -->

  <!-- End Navbar -->
  <main class="mask bg-gradient- opacity-6" class="main-content  mt-0" >
    <section  class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" >
       
        <div class="container">
          <div class="row justify-content-center">
            
          </div>
        </div>
      </div>
      <div  class="row mt-lg-n10 mt-md-n11 mt-n10" class="container" >
        <div class="mask bg-gradient-dark opacity-40" >
          <div class="col-xl-7 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Chair Registration Form</h5>
              </div>  
              <div  class="card-body" >
                <form  role="form text-left" action="chairpro.php" method="post">
                  <div class="mb-3">
                    <label>First Name </label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" aria-label="Name" aria-describedby="name-addon">
                  </div>
                  <label>Middle Name </label>
                  <div class="mb-3">
                    <input type="text" name="mname" class="form-control" placeholder="Middle Name" aria-label="Name" aria-describedby="name-addon">
                  </div>
                  <label>Last Name </label>
                  <div class="mb-3">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-label="Name" aria-describedby="name-addon">
                  </div>
                  <label>Address </label>
                  <div class="mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Name" aria-describedby="address-addon">
                  </div>
                  <label>Email </label>
                
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <label>Age </label>
                  <div class="mb-3">
                    <input type="text" name="age" class="form-control" placeholder="age" aria-label="Name" aria-describedby="age-addon">
                  </div>
                  <label>Sex </label>
                  <div class="mb-3">
                    <input type="text" name="sex" class="form-control" placeholder="Sex" aria-label="Name" aria-describedby="sex-addon">
                  </div>
                  <label>Username </label>
                  <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Name" aria-describedby="username-addon">
                  </div>
                  <label>Password </label>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="mb-3">
                            <label for="language" class="form-label">Chair Type</label>
                            <select id="language" name="chairtype" class="select2 form-select">
                              <option value=""></option>
                              <option value="Networking">Networking</option>
                              <option value="Programing">Programing</option>
                              <option value="Database">Database</option>
                              <option value="Software Engineering">Software Engineering</option>
                              
                            </select>
                          </div>
                  
                  <div class="text-center">
                    <button type="submite" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0"> <a href="chair.php" class="text-primary font-weight-bolder">Back</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
      
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>