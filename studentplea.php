<?php
  
  session_start();
  require 'config/accessController.php';
  require_once 'config/connection.php';


  
 
  $display_all = "SELECT * FROM date_status";
	$query = mysqli_query($connection, $display_all);
  
  



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Plea</title>

 <!-- Favicons -->
 <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 	<!-- Bootstrap from GetBootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Ajax script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    <img src="assets/img/logo.png" alt="">
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
    <form action="studentplea.php" method="POST">
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


    
    if($_POST['dateofbirth'] == NULL)
    {
        $dob = date('Y-m-d');
    }
    else
    {
        $dob = $_POST['dateofbirth'];
    }

    if($search = $_POST['search'] == NULL)


    $search = $_POST['search'];
    $result = mysqli_query($connection, "SELECT * FROM date_status
      WHERE  (username Like'%{$search}%' or student_status Like'%{$search}%') and date_stats = '$dob'");



   if (mysqli_num_rows($result) == 0){ 
      echo "<p style='font-weight:bold' class='py-2 text-warning'>Cannot find student.</p>";
  } ?> 


<div class="row">
<div class="col-xxl-15 pt-2 mt-2 ">
   <div class="h-25 d-inline-block" >
<table class="table table-striped" style="display: block; height: 600px;overflow: auto;">
  <thead >
    <tr class="badge-primary">
      <th scope="col" >#</th>
      <th scope="col" style="padding-left: 100px;padding-right: 100px;"  >Username</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Date</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Status</th>
      <th scope="col" style="padding-left: 50px;padding-right: 50px;">Plea</th>
      <th></th> 
    </tr>
  </thead>

  <?php while($rows = mysqli_fetch_array($result)){ ?>
  <tbody style="background-color: white;">
    <tr>
      <td><?php echo $rows['id']; ?></td>
      <td class="px-5"><?php echo $rows['username']; ?></td>
      <td class="px-5"><?php echo $rows['date_stats']; ?></td>
      <td class="px-5"><?php echo $rows['student_status']; ?></td>  
      <td class="px-5">
        
      <button id='<?php echo $rows['id']; ?>'type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> 
      Show </button>



      </td>
    </td>
     <td></td>
    </tr>
    
  </tbody>

  <?php } ?>
    
  <?php }
    // IF SEARCH BUTTON IS NOT CLICKED
    else { ?>
      <div class="row">
      <div class="col-xxl-15 pt-2 mt-2 ">
      <div class="h-25 d-inline-block" >
      <table class="table table-striped" style="display: block; height: 600px; overflow: auto;">
      <thead>
    <tr class="badge-primary">
      <th scope="col" >#</th>
       <th scope="col" style="padding-left: 100px;padding-right: 100px;" >Username</th>
       <th scope="col" style="padding-left: 50px;padding-right: 50px;">Date</th>
       <th scope="col" style="padding-left: 50px;padding-right: 50px;">Status</th>
       <th scope="col" style="padding-left: 50px;padding-right: 50px;">Plea</th>
    </tr>
  </thead>

        <?php while($rows = mysqli_fetch_array($query)){ ?>
        <tbody style="background-color: white;">
          <tr>
            <td><?php echo $rows['id']; ?></td>
        <td class="px-5"><?php echo $rows['username']; ?></td>
        <td class="px-5"><?php echo $rows['date_stats']; ?></td>
        <td class="px-5"><?php echo $rows['student_status']; ?></td>
        <td class="px-5"><button id='<?php echo $rows['id']; ?>'type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> 
      Show </button></td>
      </tr>
        </tbody>
        <?php } ?>
      </table>
    <?php } ?>
</center>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Student Plea </h3>
        </div>
        <div class="modal-body">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Closed</button>
        </div>
      </div>
    </div>
</div>


<script>
$(document).ready(function(){
  $('button').click(function(){
 id_student = $(this).attr('id')
          $.ajax({url: "Plea.php", 
          method:'post',
          data:{student_id:id_student},
           success: function(result){
  $(".modal-body").html(result);
  }});


    $('#myModal').modal("show"); 
  })
}) 



</script>



</body>

</html>