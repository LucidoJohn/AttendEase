<?php
    session_start();
    require 'config/accessController.php';
    require_once 'config/connection.php';


   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--important tags : these are important settings for your machine to know more about your code and how to display it-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--title-->
    <title> Contact </title>
    
 
    <link href="assets/img/icon_cube.png" rel="icon">
  <link href="assets/img/icon_cube.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 ">
 <!--Link for open sans font type and its values-->  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
     
    <!--Linking fontawesome file with html-->
    <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">

    <!--Linking bootstrap file to html-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!--Linking the css file to html-->
    <link rel="stylesheet" href="css/style/style.css">

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

    

 <section id="ABOUT" style= "padding-left: 500px; text-align: center; "width="500px" height="500px">
     <div class="about-1 ">
        </br>
        </br> 
        </br>
        </br> 
        </br>
        </br> 
        </br>
        </br> 
        

         <h3> CONTACT PERSON </h3>
         <p class= "text-center ml-5 pl-5 " class="px-5" style="font-size: 25px">  Attendance Management System is a software developed for daily student attendance in schools, collages and institutes. If facilitates to access the attendance information of a particular student in a particular class.</P>

     </div>
     <div id="about-2">
     <div class="content-box-lg">
         <div class="container ">
             <div class="row">
                 <div class="col-sm-3 p-2 my-2">
                    <div class="about-item text-center">
                     <i class="fa fa-book"></i>
                     <h3>Joshua</h3>
                     <hr>
                     <p class="px-1" style="font-size: 20px"> ( MASTER CODER ) <br>joshua.pardo30@gmail.com <br>
 <br> Bachelor Of Science In Information Technology<br> <br>Calamba Park Place, Makiling, Calamba City <br> <br>0945-539-9669

  </p>
                     </div>
                 </div>
                 <div class="col-sm-3 p-2 my-2">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3>Jarc</h3>
                     <hr>
                    <p class="px-1" style="font-size: 20px"> ( MASTER WEB DESIGNER)      
                     callejohnaaronr@gmail.com<br> <br> Bachelor Of Science In Information Technology<br> <br> Trece Martires, Cavite <br><br> #0956-892-0288 </p>
                     </div>
                 </div>
                  <div class="col-sm-3 p-2 my-2">
                    <div class="about-item text-center">
                     <i class="fa fa-globe"></i>
                     <h3>Drei</h3>
                     <hr>
                    <p class="px-1" style="font-size: 20px"> (WEB DES ASSISTANT)      
                    Arcegavince40@gmail.com<br> <br> Bachelor Of Science in Information Technology<br> <br>  Brgy Munting Gatid Sta Cruz Laguna <br> #0921-955-2842 <br>
                       </p>
                     </div>
                 </div>
                 <div class="col-sm-3 p-2 my-2">
                    <div class="about-item text-center">
                     <i class="fa fa-pencil"></i>
                     <h3>Jc</h3>
                     <hr>
                     <p class="px-1" style="font-size: 20px"> (Master Coder Assistant) JohnCarlo Lucido <br><br> Bachelor Of Science In Information Technology <br><br> Brgy Makiling, Calamba Laguna <br> #0949-846-4847 <br> </p>
                     </div>
                  </div>
              </div>
            </div>
         </div>
      </div> 
      </div>  
 </section>
    
<!--our footer -->
 

</body>
</html>


