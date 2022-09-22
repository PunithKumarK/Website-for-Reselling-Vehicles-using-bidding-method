<?php
error_reporting(0);

$conn = mysqli_connect("localhost","root","","hobby");

if(isset($_POST['submit1'])){

    $name = $_POST['vname'];
    $model = $_POST['vmodel'];
    $price = $_POST['vprice'];
    $quality = $_POST['quality'];
    $desc = $_POST['vdesc'];
    $cname = $_POST['cname'];
    $phone = $_POST['phone'];
    $file= $_FILES['image']['name'];
    


    $query="INSERT INTO `upload`(`vname`, `vmodel`, `vprice`, `quality`, `vdesc`, `cname`,`phone`,`image`) VALUES ('$name','$model','$price','$quality','$desc','$cname','$phone','$file')";

    $res= mysqli_query($conn,$query);

    if ($res){

        move_uploaded_file('images/'.$_FILES['image']['tmp_name'], "$file");
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shoppers Gift – Making Memories</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SELL YOUR VEHICLE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add New product </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> <hr />

        <form action="#" enctype="multipart/form-data" method="POST">
        <!-- form-group Starts -->
          <div class="row form-group" >
            <label class=" control-label" > vehicle name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                    <input type="text" required placeholder="Enter Name" name="vname" class="form-control" id="">
                </div>&nbsp;&nbsp;&nbsp;



            <label class="control-label" > vehicle model :  </label>&nbsp;
                <div class="col-md-4" >
                <input type="text" required placeholder="Enter Name" name="vmodel" class="form-control" id="">
                </div>&nbsp;&nbsp;&nbsp;

                </div>
                <br>

                <label class="control-label" > Price :  </label>&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                <input type="text" required placeholder="Enter Name" name="vprice" class="form-control" id="">
                </div>&nbsp;&nbsp;&nbsp;
                <br>

                <label class="control-label" >Quality :  </label>&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                <input type="radio" name="quality" class="form-control" value="best" id=""><h1>BEST</h1><br/>
                <input type="radio"  name="quality" class="form-control" value="good" id=""><h1>GOOD</h1><br/>
                <input type="radio"  name="quality" class="form-control" value="poor" id=""><h1>POOR</h1><br/>
                </div>&nbsp;&nbsp;&nbsp;
                <br>

                <label class="control-label" > Description :  </label>&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                <textarea required placeholder="Enter Name" name="vdesc" class="form-control" id="" col=150 ></textarea>
                </div>&nbsp;&nbsp;&nbsp;
                <br>
                <label class="control-label" >Enter your name: </label>&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                <input type="text" required placeholder="Enter Name" name="cname" class="form-control">
                </div>&nbsp;&nbsp;&nbsp;
                <br>
                <label class="control-label" >Enter your phone number: </label>&nbsp;&nbsp;&nbsp;
                <div class="col-md-4" >
                <input type="number" required placeholder="Enter phone number" name="phone" class="form-control">
                </div>&nbsp;&nbsp;&nbsp;
                <br>

                <label class=" control-label" > Product Image &nbsp;: </label> &nbsp;&nbsp;
                <div class="row form-group" >
          
                <div class="col-md-3" >
                      <input type="file" required class="form-control" name="image" id="image">
                </div>
                <br>
                <br>
                <br>
                </div>
                <input type="submit" name="submit1" value="Upload Image/Data">

                </div>
                
            <br>
         </div>
        <!-- form-group Ends -->
        <hr>
</html>