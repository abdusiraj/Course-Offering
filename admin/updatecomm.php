
<?php 
  include("../connection.php");
  $id = $_GET['Id'];
 
  $selExmne = $con->query("SELECT * FROM committee WHERE com_id='$id' ")->fetch_ASSOC();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    COMS | admin
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

<body id="page-top">


<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selExmne['fname']); echo "  "; echo strtoupper   (  $selExmne['mname']);?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" action="commupdatepro.php">
     <div class="form-group">
        <legend>First Name</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="" name="fname" class="form-control" required="" value="<?php echo $selExmne['fname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Middle Name</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="" name="mname" class="form-control" required="" value="<?php echo $selExmne['mname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Last Name</legend>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="" name="lname" class="form-control" required="" value="<?php echo $selExmne['lname']; ?>" >
     </div>

     <div class="form-group">
        <legend>Gender</legend>
        <select class="form-control" name="sex">
          <option value="<?php echo $selExmne['sex']; ?>"><?php echo $selExmne['sex']; ?></option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
     </div>

     
     

     <div class="form-group">
        <legend>Address</legend>
        <input type="" name="addres" class="form-control" required="" value="<?php echo $selExmne['address']; ?>" >
     </div>

     <div class="form-group">
        <legend>Email</legend>
        <input type="email" name="email" class="form-control" required="" value="<?php echo $selExmne['email']; ?>" >
     </div>
     <div class="form-group">
        <legend>User Name</legend>
        <input type="text" name="uname" class="form-control" required="" value="<?php echo $selExmne['uname']; ?>" >
     </div>
     <div class="form-group">
        <legend>Password</legend>
        <input type="password" name="pass" class="form-control" required="" value="<?php echo $selExmne['pass']; ?>" >
     </div>

     <div class="form-group">
        <legend>Age</legend>
        <input type="int" name="age" class="form-control" required="" value="<?php echo $selExmne['age']; ?>" >
     </div>
     

     
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>


<script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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





