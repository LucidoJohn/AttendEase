<?php
    session_start();
    require 'config/accessController.php';
    require_once 'config/connection.php';
    

    //$query = mysqli_query($connection, $count_all_students);
    

    $idd = $_GET['id'];
    $idd = 1;
 
    //$placeholder = "SELECT * FROM entity_information where id = '$id'";



    //$query = mysqli_query($connection, $placeholder);
    $validate = "SELECT COUNT(plea) from date_status where id = '$idd'";
    $stmt1 = $connection -> prepare($validate);
    $stmt1 -> execute();
    $result1 = $stmt1 -> get_result();
    $validate = $result1 -> fetch_array();
    


    $placeholder = "SELECT plea from date_status where id = ' $idd'";
    $query = mysqli_query($connection,$placeholder);

    if (isset($_POST['editBtn'])) {
		
		$plea = $_POST['plea'];
    $query1 = "UPDATE date_status SET plea = '$plea' WHERE id = ' $idd'";
		$result = mysqli_query($connection, $query1);

      if ($result == TRUE) 
      {
        header('location: myRecords.php');
        

      }
      else{
          echo "error";

      }

		
    
	}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Plea</title>
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
            <form action = "myPlea.php" method = "POST">
			   <div class="row">

               <?php while($row = mysqli_fetch_array($query)){ 
                    if($row[0] == NULL){
                        
                          $defPlaceHolder = "";  
                    }
                    else{
                        $defPlaceHolder = $row[0];
                    }
              
                ?>

			<div class="form-group p-2 col-sm-12 py-5" >
				<label for="fnFormControl"><h3>Student's Plea</h3></label>
				<textarea class="form-control" rows="10" name = "plea" placeholder = <?php echo $defPlaceHolder?> ></textarea>
			</div>

            <div class="mb-3">
                    <label for="formFile" class="form-label">Dito ilalagay nag ebidensiya</label>
                    <input class="form-control" type="file" id="formFile">
            </div>

            <?php } ?>

            <div class="d-grid p-4">
           		<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name = "editBtn" >Submit</button>
             
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