<?php

    
	  $page_title = 'Register'; 
    require_once 'config/connection.php';
    error_reporting(E_ERROR | E_PARSE);
	 
    $userDefault = 2;
    $errors = array();


    if(isset($_POST['registerBtn'])){
      
        $username = $_POST['username'];
        $password = $_POST['password'];

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $sectionName = $_POST['sectionName'];
        $contactNumber = $_POST['contactNumber'];
      
        $password = hash('md5',$password);
       

     

      //validation
      if (empty($username)) {
        array_push($errors,"username");
        
      }
      if (empty($password)) {
        array_push($errors,"username");
      }
      if (empty($fname)) {
        array_push($errors,"username");
      }
      if (empty($lname)) {
        array_push($errors,"username");
      }
      if (empty($sectionName)) {
        array_push($errors,"username");
      }
      if (empty($contactNumber)) {
        array_push($errors,"username");
      }
      if(empty($password)){
        array_push($errors,"username");
      }

     

   
    
        $insertQuery = "INSERT INTO entity_information(username, password, firstName, lastName, contactNumber, sectionName, type_id) VALUES (?,?,?,?,?,?,?)";
        $stmt = $connection -> prepare($insertQuery); 
        $stmt -> bind_param('ssssssi',$username, $password, $fname,$lname,$sectionName, $contactNumber,$userDefault);
  
         if($stmt -> execute()){
          
              header('location: index.php');
              

        }
        else{
          include 'includes/fields.php';

        }


          
        
      
      }
    
    



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>


  <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
 <div class="container pt-5 ">
    <div class="row">
      <div class="col-xxl-9 col-md-7 col-md-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-2 p-sm-5">
            <h1 class="card-title text-center mb-3 fw-light fs-2">Sign up </h1>
            <form action = "register.php" method = "POST">
			   <div class="row">
			<div class="form-group p-2 col-sm-6">
				<label for="fnFormControl">First Name</label>
				<input type="text" class="form-control" name = "fname" placeholder="ex: Joshua" required>
			</div>
			<div class="form-group p-2 col-sm-6">
				<label for="lnFormControl">Last Name</label>
				<input type="text" class="form-control" name = "lname" placeholder="ex: Garcia" required>
				</div>
			
			<div class="form-row">
				<div class="form-group p-1 col-sm-6">
        <label for="floatingInput">Username</label>
        <input type="email" class="form-control" id="floatingInput" name ="username" placeholder="name@example.com" required>

			</div>
			<div class="form-group p-1 col-sm-6">
				<label for="pwFormControl">Password</label>
				<input type="password" class="form-control" name = "password" placeholder="we'll never tell anyone, don't worry." required>
			</div>
			</div>
			<div class="form-group p-2 col-md-6">
				<label for="snFormControl">Section Name</label>
				<input type="text" class="form-control" name = "sectionName" placeholder="ex: BSIT211B" required>
			</div>
			<div class="form-group p-2 col-md-6">
				<label for="cnFormControl">Contact Number</label>
				<input type="text" class="form-control" name ="contactNumber" placeholder="+63" required>
			</div>
			</div>
            <div class="d-grid p-4">
           		<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name = "registerBtn" >Register</button>
             
            </div>
                <div class="d-flex justify-content-center p-1 text-secondary" >Already have an account?
              <a href="index.php" class="nbtn btn-primary btn-login text-uppercase fw-bold">Log in</a>
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