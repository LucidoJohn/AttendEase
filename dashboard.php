<?php
    session_start();
    require 'config/accessController.php';
    require_once 'config/connection.php';
    
    $count_all_students = "SELECT count(*) from entity_information as all_students where type_id = 2";
    $count_all_present = "SELECT COUNT(*) from date_status where student_status = 'Present'and date_stats = curdate()";
    $count_all_late = "SELECT COUNT(*) from date_status where student_status = 'Late' and date_stats = curdate()";
    //$count_all_absent = "SELECT COUNT(*) from date_status where student_status = NULL and date_stats = CURDATE()";


    $query_all = mysqli_query($connection, $count_all_students);
    $query_present = mysqli_query($connection, $count_all_present);
    $query_late = mysqli_query($connection, $count_all_late);
    //$query_absent= mysqli_query($connection, $count_all_absent);

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
  
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://stackpath.bootsrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4773d50c3e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/4773d50c3e.css" crossorigin="anonymous">

</head>


<body>
  

  <header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboard.php" class="logo d-flex align-items-center">
    <img src="assets/img/icon_cube.png" alt="">
      <span class="d-none d-lg-block">Attend Ease</span>
    </a>
  </div><!-- End Logo -->



  </header><!-- End Header -->


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
<a class="nav-link collapsed" href="dashboard.php" >
  <i class="bi bi-tools"></i>
  <span>Dashboard</span>
</a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
<a class="nav-link collapsed" href="adminRecords.php" >
  <i class="bi bi-grid"></i>
  <span>Admin</span>
</a>
</li><!-- End Dashboard Nav -->


<li class="nav-item">
<a class="nav-link collapsed" href="studentRecords.php">
  <i class="bi bi-journal-text"></i>
  <span>Student Records</span>
 
</a>
</li><!-- End Forms Nav -->

<li class="nav-item">
<a class="nav-link collapsed" href="studentplea.php">
  <i class="bi bi-layout-text-window-reverse"></i>
  <span>Student Plea</span>
</a>
</li>


<li class="nav-heading">Pages</li>

<li class="nav-item">
<a class="nav-link collapsed" href="profile.php">
  <i class="bi bi-person"></i>
  <span>Profile</span>
</a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
<a class="nav-link collapsed" href="contact.php">
  <i class="bi bi-envelope"></i>
  <span>Contact</span>
</a>
</li><!-- End Contact Page Nav -->


<li class="nav-item">
<a class="nav-link collapsed" href="logout.php">
  <i class="bi bi-box-arrow-in-right"></i>
  <span>Log-Out</span>
</a>
</li><!-- End Login Page Nav -->





</ul>

</aside>

<!-- End Sidebar-->

<!--Cards (four hoverable context box)-->

<div class="container">
  <div class="box">
    <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true">
    </i></div>
    <div class="content">
      <h3>Students</h3>
    </div>
  </div>
  <div class="box">
    <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true">
    </i></div>
    <div class="content">
      <h3>Present</h3>
    </div>
  </div>
  <div class="box">
    <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true">
    </i></div>
    <div class="content">
      <h3>Late</h3>
    </div>
  </div>
  <div class="box">
    <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
    </div>
    <div class="content">
      <h3>Absent</h3>
    </div>
  </div>
  <div class="container"></div>
  <div class="row">

   <?php while($rows = mysqli_fetch_array($query_all)){ ?>

    <div class="col-3"><h2><?php echo $rows[0]; ?></h2></div>

    <?php } ?>




    <?php while($rows = mysqli_fetch_array($query_present)){ ?>

    <div class="col-3"><h2><?php echo $rows[0]; ?></h2></div>
    
    <?php } ?>


    
    <?php while($rows = mysqli_fetch_array($query_late)){ ?>

    <div class="col-3"><h2><?php echo $rows[0]; ?></h2></div>

    <?php } ?>


    <div class="col-3"><h2>0</h2></div>
  </div>
  </div>
</div>
</body>
</html>