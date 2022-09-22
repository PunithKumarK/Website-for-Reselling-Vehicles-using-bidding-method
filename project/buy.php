<?php

error_reporting(0);

$conn = mysqli_connect("localhost","root","","hobby");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Image upload</title>
    
    <link href="buy1.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
      body{
    background-color: cornflowerblue;
}

    </style>
</head>
<body>
  <section>

    <div class ="container">
        <div class="col-md-12">
            <div class="col-md-6">
                <h3 class="text-center"></h3> 
                
                <?php

                $sel = "SELECT * FROM `upload`";
                $que = mysqli_query($conn,$sel);

                $output = "";

                if(mysqli_num_rows($que) < 1) {

                    $output .= "<h3 class='text-center'>no image uploaded</h3>";


                }

                while($row = mysqli_fetch_array($que)) {
                    ?>
                    <section> 
                    <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                      <img style="height: 250px; width: 300px;" src="<?php echo $row['image']; ?>" height="200" width="200">
                      <?php
                      $ops = "SELECT * FROM `upload`";
                      ?><br>
                      <div class="services-content">
                      <?php
                      echo "VEHICLE NAME : ";
                      echo strtoupper($row['vname']);
                      ?><br><?php
                      echo "YEAR : ";
                      echo strtoupper($row['vmodel']);
                      ?><br><?php
                      echo "PRICE : ";
                      echo $row['vprice'];
                      ?><br><?php
                      echo ucwords($row['vdesc']);  
                      ?>
                      <br>
                      <br>
                      <a href="details.php?id=<?php echo $row['vmodel']; ?>" data-toggle="
            tooltip" data-placement="bottom" title="EDIT"> <i class="fa fa-trash" aria-hidden="true">DETAILS</i> </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="bid.php?id=<?php echo $row['vmodel']; ?>" data-toggle="
            tooltip" data-placement="bottom" title="EDIT"> <i class="fa fa-trash" aria-hidden="true">BID</i> </a>
                    </section>
                      <?php echo "</td>";
                      

                }
                ?>
</div>
</div>
</div>

              </section>
                
              
                 
</body>
</html>