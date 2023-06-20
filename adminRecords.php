<?php
  
  session_start();
  require 'config/accessController.php';
  require_once 'config/connection.php';



  $display_all = "SELECT * FROM entity_information where type_id = 1";
  $query = mysqli_query($connection, $display_all);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Records</title>

 <!-- Favicons -->


  <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 	<!-- Bootstrap from GetBootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<style>
 html, body {
  height:100%;
 
}

.well {
  background-color: #ffffee
}

#content {
  padding: 25% 25% 5%;  
}

.search-form {
  border-radius: 30px 0 0 30px;
}

.input-group {
  width:100%;
}

input-group-btn {
  max-width:38px;
}

#search {
  border: 1px;
}

.search-btn {
  cursor:pointer;
  border-radius: 0 30px 30px 0; 
  background-color:#fff;
  color:#669;
  
}

.text-center {
  color: #fff;
} 


</style>
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

<center>
</br>
</br>
</br>
</br>

<div>
    <form action="adminRecords.php" method="POST">
      <input type="text" name="search" placeholder="type search here..." size="50px" style="padding-left: 20px;">
      <input type="submit" name="searchBtn" value="Search">
    </form>
  </div>
<?php 
 
  if (isset($_POST['searchBtn'])) {
    // We put backend logic to retrieved specific search value
    
    $search = $_POST['search'];
    $result = mysqli_query($connection, "SELECT * FROM entity_information
      WHERE  username Like'%{$search}%'  
      or firstName Like'%{$search}%' 
      or lastName Like'%{$search}%'
      or contactNumber Like'%{$search}%'
      or sectionName Like'%{$search}%'");
   if (mysqli_num_rows($result) == 0){ 
      echo "<p style='font-weight:bold' class='py-2 text-warning'>Cannot find student.</p>";
  } ?> 


<div class="row">
<div class="col-xxl-15 pt-2 mt-2 pl-5 ml-5">
   <div class="h-25 d-inline-block" >
<table class="table table-striped  pl-5 ml-5" style="display: block; height: 600px; overflow: auto;">
  <thead >
    <tr class="badge-primary">
      <th scope="col" >#</th>
      <th scope="col" style="padding-left: 100px;padding-right: 100px;">Username</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">First Name</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Last Name</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Contact Number</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Section Name</th>
      <th scope="col" style="padding-left: 100px;padding-right: 40px;">Actions</th>
     
    </tr>
  </thead>

  <?php while($rows = mysqli_fetch_array($result)){ ?>
  <tbody>
    <tr>
      <th><?php echo $rows['id']; ?></th>
      <td class="px-5"><?php echo $rows['username']; ?></td>
      <td class="px-5"><?php echo $rows['firstName']; ?></td>
      <td class="px-5"><?php echo $rows['lastName']; ?></td>
      <td class="px-5"><?php echo $rows['contactNumber']; ?></td>
      <td class="px-5"><?php echo $rows['sectionName']; ?></td>
      <td class="px-5">

        <a href="demote.php?id=<?php echo $rows['id']; ?>" class="badge badge-info"> Demote </a>
        <a href="delete.php?id=<?php echo $rows['id']; ?>" class="badge badge-danger"> Delete </a>

      </td>
      
    </tr>       
                         
  </tbody>
  <?php } ?>
  
  <?php }
    // IF SEARCH BUTTON IS NOT CLICKED
    else { ?>
      <div class="row">
      <div class="col-xxl-15 pt-2 mt-2 pl-5 ml-5">
      <div class="h-25 d-inline-block" >
      <table class="table table-striped pl-5 ml-5" style="display: block; height: 600px; overflow: auto;">
      <thead>
    <tr class="badge-primary">
    <th scope="col" >#</th>
      <th scope="col" style="padding-left: 100px;padding-right: 100px;">Username</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">First Name</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Last Name</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Contact Number</th>
      <th scope="col" style="padding-left: 40px;padding-right: 40px;">Section Name</th>
      <th scope="col" style="padding-left: 100px;padding-right: 40px;">Actions</th>
    </tr>
  </thead>

        <?php while($rows = mysqli_fetch_array($query)){ ?>
        <tbody style="background-color: white;">
          <tr>
            
          <th><?php echo $rows['id']; ?></th>
         <td class="px-5"><?php echo $rows['username']; ?></td>
         <td class="px-5"><?php echo $rows['firstName']; ?></td>
         <td class="px-5"><?php echo $rows['lastName']; ?></td>
         <td class="px-5"><?php echo $rows['contactNumber']; ?></td>
         <td class="px-5"><?php echo $rows['sectionName']; ?></td>
         <td class="px-5">

          <a href="demote.php?id=<?php echo $rows['id']; ?>" class="badge badge-info"> Demote </a>
          <a href="delete.php?id=<?php echo $rows['id']; ?>" class="badge badge-danger"> Delete </a>
         
          
        </td>

      </tr>
        </tbody>
        <?php } ?>
      </table>
    <?php } ?>
</center>
</body>

</html>