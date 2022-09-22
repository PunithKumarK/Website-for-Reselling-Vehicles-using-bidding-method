<?php 

?>
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/trice/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 04:30:39 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/flaticon.css">

<link rel="stylesheet" href="assets/css/meanmenu.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<link rel="icon" type="image/png" href="img/serum.png">

<title>Serum Pest Control- Disinfection & Sanitization Services HTML Template</title>
</head>
<body>

<div class="loader-wrapper">
<div class="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>


<header class="header-area fixed-top">
<div class="top-header-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-6">
<ul class="header-content-left">
<li>
<a href="">
<i class="bx bx-envelope"></i>
Email: <span class="__cf_email__">[serumjn@gmail.com]</span>
</a>
</li>
<li>
<a href="tel:+9482129581">
<i class="bx bx-phone-call"></i>
Call Us: 9482129581
</a>
</li>
</ul>
</div>
<div class="col-lg-6 col-sm-6">
<ul class="header-content-right">
<li>
Opening Hour: 9:00 am - 9:00 pm
</li>
<li>
    <?php 
if(isset($_SESSION['cid'])){  ?>

<a href="Controller/logout.php?fromcust=cust">
Logout
</a>
<?php }else{ ?>

<a href="log-in.php">
Sign In
</a>
<?php }
?>


</li>
</ul>
</div>
</div>
</div>
</div>

<div class="nav-area">
<div class="navbar-area">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img style="height: 150px; width: 150px;" style="height: 150px; width: 150px;" src="img/serum.png"  alt="Logo">
</a>
</div>

<div class="main-nav">
<nav class="navbar navbar-expand-md">
<div class="container">
<a class="navbar-brand" href="index.html">
<img  style="height: 150px; width: 150px;" src="img/serum.png" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu">
<ul class="navbar-nav m-auto">
<li class="nav-item">
<a href="index.php" class="nav-link active">
Home
<i class="bx bx-chevron-right"></i>
</a>
</li>
<li class="nav-item">
<a href="about.php" class="nav-link">About <i class="bx bx-chevron-right"></i></a>
</li>

<li class="nav-item">
<a href="service.php" class="nav-link">
Services
<i class="bx bx-chevron-right"></i>
</a>

</li>
<li class="nav-item">
<a href="products.php" class="nav-link">
Shop
<i class="bx bx-chevron-right"></i>
</a>

</li>
<li class="nav-item">
<a href="contact.php" class="nav-link">Contact
    <i class="bx bx-chevron-right"></i>
</a>
</li>

<?php 
if(isset($_SESSION['cid'])){ ?>
<li class="nav-item">
<a href="Controller/logout.php?fromcust=cust" class="nav-link">Logout</a>
</li>
<?php }else{ ?>
<li class="nav-item">
<a href="#" class="nav-link">
Login | Register
<i class="bx bx-chevron-right"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="log-in.php" class="nav-link">Login</a>
</li>
<li class="nav-item">
<a href="sign-in.php" class="nav-link">Register</a>
</li>

</ul>
</li>
<?php } ?>




</ul>

<div class="others-option">
<div class="burger-menu">
<i class='bx bx-menu'></i>
</div>
<div class="get-quote">
    <?php 
if(isset($_SESSION['cid'])){  ?>

<a href="index.php#Appointment" class="default-btn">
Make An Appointment
</a>
<?php }else{ ?>
<a href="log-in.php" class="default-btn">
login For Appointment
</a>
<?php }
?>

</div>
</div>

</div>
</div>
</nav>
</div>
</div>
</div>

</header>


<div class="sidebar-modal">
<div class="sidebar-modal-inner">
<div class="sidebar-about-area">
<div class="title">
<h2>About Us</h2>
<p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
</div>
</div>
<div class="sidebar-contact-area">
<div class="contact-info">
<div class="contact-info-content">
<h2>
<a href="tel:+9482129581">+9482129581</a>
<span>OR</span>
<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#1c74797070735c686e757f79327f7371"><span class="__cf_email__" data-cfemail="4d25282121220d393f242e28632e2220">[email&#160;protected]</span></a>
</h2>
<ul class="social">
<li>
<a href="#" target="_blank">
<i class="bx bxl-facebook"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-twitter"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-linkedin"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-youtube"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-instagram"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<span class="close-btn sidebar-modal-close-btn">
<i class="bx bx-x"></i>
</span>
</div>
</div>
