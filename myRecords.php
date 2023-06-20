<?php
  
  session_start();
  require 'config/accessController.php';
  require_once 'config/connection.php';


  $user = $_SESSION['id'];
  $display_all = "SELECT * FROM date_status where user_id ='$user'";
  $query = mysqli_query($connection, $display_all);

  

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Records</title>

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
  <a href="dashboardStudents.php" class="logo d-flex align-items-center">
  <img src="assets/img/icon_cube.png" alt="">
    <span class="d-none d-lg-block">Attend Ease</span>
  </a>
</div><!-- End Logo -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
<a class="nav-link collapsed" href="dashboardStudents.php" >
  <i class="bi bi-tools"></i>
  <span>Dashboard</span>
</a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
<a class="nav-link collapsed" href="myRecords.php" >
  <i class="bi bi-grid"></i>
  <span>My Records</span>
</a>
</li><!-- End Dashboard Nav -->

</a>
</li><!-- End Forms Nav -->

<li class="nav-heading">Pages</li>

<li class="nav-item">
<a class="nav-link collapsed" href="profileStudents.php">
  <i class="bi bi-person"></i>
  <span>Profile</span>
</a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
<a class="nav-link collapsed" href="contactStudents.php">
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
    <form action="myRecords.php" method="POST">
      <input type="text" name="search" placeholder="type search here..." size="50px" style="padding-left: 20px;">
     
      
                         
                            <div class="w-25 p-3">
                                <label for=""></label>
                                <input type="date" name="dateofbirth" class="form-control"/>
                            </div>
             
      <input type="submit" name="searchBtn" value="Search">
    </form>
  </div>
<?php 
 
  if (isset($_POST['searchBtn'])) {
    // We put backend logic to retrieved specific search value
    
    $search = $_POST['search'];

    if($_POST['dateofbirth'] == NULL)
    {
         $dob = date('Y-m-d');
    }
    else
    {
        $dob = $_POST['dateofbirth'];
    }

    $result = mysqli_query($connection, "SELECT * FROM date_status
      WHERE                    
        date_stats = '$dob' and user_id = '$user'");

   if (mysqli_num_rows($result) == 0){ 
      echo "<p style='font-weight:bold' class='py-2 text-warning'>Cannot find student.</p>";
  } ?> 


<div class="row">
<div class="col-xxl-15 pt-2 mt-2">
   <div class="h-25 d-inline-block" >
<table class="table table-striped" style="display: block; height: 600px; overflow: auto;">
  <thead >
    <tr class="badge-primary">
      <th scope="col" >#</th>
      <th scope="col" style="padding-left: 100px;padding-right: 100px;"  >Username</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Date</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Status</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Actions</th>
     
    </tr>
  </thead>

  <?php while($rows = mysqli_fetch_array($result)){ ?>
  <tbody>
    <tr>
           
    <th><?php echo $rows['id']; ?></th>
        <td class="px-5"><?php echo $rows['username']; ?></td>
        <td class="px-5"><?php echo $rows['date_stats']; ?></td>
        <td class="px-5"><?php echo $rows['student_status']; ?></td>
        <td class="px-5"><a href="myPlea.php?id=<?php echo $rows['user_id']; ?>" class="badge badge-danger"> Plea </a>
         </td>
        
      
    </tr>       
                         
  </tbody>
  <?php } ?>
  
  <?php }
    // IF SEARCH BUTTON IS NOT CLICKED
    else { ?>
      <div class="row">
      <div class="col-xxl-15 pt-2 mt-2">
      <div class="h-25 d-inline-block" >
      <table class="table table-striped" style="display: block; height: 600px; overflow: auto;">
      <thead>
    <tr class="badge-primary">
    <th scope="col" >#</th>
      <th scope="col" style="padding-left: 100px;padding-right: 100px;">Username</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Date</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Status</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Actions</th>
    </tr>
  </thead>

        <?php while($rows = mysqli_fetch_array($query)){ ?>
        <tbody style="background-color: white;">
          <tr>
            
        <th><?php echo $rows['id']; ?></th>
        <td class="px-5"><?php echo $rows['username']; ?></td>
        <td class="px-5"><?php echo $rows['date_stats']; ?></td>
        <td class="px-5"><?php echo $rows['student_status']; ?></td>
        <td class="px-5"><a href="myPlea.php?id=<?php echo $rows['id']; ?>" class="badge badge-danger"> Plea </a>
        
         

      </tr>
        </tbody>
        <?php } ?>
      </table>
    <?php } ?>
</center>
</body>

</html>