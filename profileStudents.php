<?php
    session_start();
    require 'config/accessController.php';
    require_once 'config/connection.php';
    
    $count_all_students = "SELECT count(*) from entity_information as all_students where type_id = 2";
    $count_all_present = "SELECT COUNT(*) from date_status where student_status = 'Present'";
    $count_all_late = "SELECT COUNT(*) from date_status where student_status = 'Late'";
    $count_all_absent = "SELECT COUNT(*) from date_status where student_status = NULL and date_stats = CURDATE()";
    $query = mysqli_query($connection, $count_all_students);

    $id = $_SESSION['id'];
    $placeholder = "SELECT * FROM entity_information where id = '$id'";
    $query = mysqli_query($connection, $placeholder);



    if (isset($_POST['editBtn'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
    $password = hash('md5',$password);
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$contactNumber = $_POST['contactNumber'];
		$sectionName = $_POST['sectionName'];
        

		$updateQuery = "UPDATE entity_information SET username='$username', password='$password',
			firstName='$firstName', lastName='$lastName', contactNumber='$contactNumber', sectionName='$sectionName'
             WHERE id='$id'";

		mysqli_query($connection, $updateQuery);
		
	}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Profile </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

   


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



<div class="container py-5">
    <div class="row ">
      <div class="col-xxl-9 col-md-7 col-md-5 mx-auto" >
        <div class="card border-0 shadow rounded-3 my-5" >
          <div class="card-body p-2 p-sm-5" >
            <h1 class="card-title text-center mb-3 fw-light fs-2" >Profile</h1>
            <form action = "profileStudents.php" method = "POST">
			   <div class="row">

               <?php while($row = mysqli_fetch_array($query)){ ?>

			<div class="form-group p-2 col-sm-6">
				<label for="fnFormControl">First Name</label>
				<input type="text" class="form-control" name = "fname" placeholder= <?php  echo $row[3]?>>
			</div>
			<div class="form-group p-2 col-sm-6">
				<label for="lnFormControl">Last Name</label>
				<input type="text" class="form-control" name = "lname" placeholder=<?php  echo $row[4]?>>
				</div>
			
			<div class="form-row">
				<div class="form-group p-1 col-sm-6">
        <label for="floatingInput">Username</label>
        <input type="email" class="form-control" id="floatingInput" name ="username" placeholder=<?php  echo $row[1]?>>

			</div>
			<div class="form-group p-1 col-sm-6">
				<label for="pwFormControl">Password</label>
				<input type="password" class="form-control" name = "password">
			</div>
			</div>
			<div class="form-group p-2 col-md-6">
				<label for="snFormControl">Section Name</label>
				<input type="text" class="form-control" name = "sectionName" placeholder=<?php  echo $row[6]?>>
			</div>
          
			<div class="form-group p-2 col-md-6">
				<label for="cnFormControl">Contact Number</label>
				<input type="text" class="form-control" name ="contactNumber" placeholder=<?php  echo $row[5]?>>
			</div>
			</div>
            <?php } ?>
            <div class="d-grid p-4">
           		<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name = "editBtn" >Edit</button>
             
            </div>
                <div class="d-flex justify-content-center p-1 text-secondary" >Glad you are here!
              
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





  
</body>

</html>