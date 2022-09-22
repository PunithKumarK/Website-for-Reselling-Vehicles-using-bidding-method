<?php

$conn = mysqli_connect("localhost","root","","hobby");

$update = false;

$id = 0;

$price = '';
$model = '';
$cname = '';
$image = '';
$name = '';
$desc = '';
$quality = '';
$phone = '';

if(!$conn)
{
    echo "not connected to server";
}

if(!mysqli_select_db($conn,'hobby'))
{
    echo 'database not selected';
}



if(isset($_GET['id'])){
    $id = $_GET['id'];

    $update = true;

    $result = $conn->query("SELECT * FROM upload WHERE vmodel='$id'");

        $items = $result->fetch_array();
        $model = $items['vmodel'];
        $price = $items['vprice'];
        $cname = $items['cname'];
        $image = $items['image'];
        $name = $items['vname'];
        $desc = $items['vdesc'];
        $quality = $items['quality'];
        $phone = $items['phone'];
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>
  <style>
      body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100vh
}

  </style>
  <link href="details.css" rel="stylesheet" type="text/css">

  <body>
	
	<div class="container">
  <?php

   $sel = "SELECT * FROM `upload`";
$que = mysqli_query($conn,$sel);

$output = "";

if(mysqli_num_rows($que) < 1) {

    $output .= "<h3 class='text-center'>no image uploaded</h3>";


}

if($row = mysqli_fetch_array($que)) {
    ?>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <li class="active"><a data-target="#pic-1" style="height: 250px; width: 300px;" data-toggle="tab"><img src="<?php echo $image; ?>" height="300" width="300"/></a></li>
						</ul>
                        
						

						<h3 class="product-details"><?php echo $name; ?></h3>
                        <h4><?php echo $model; ?></h4>
						            <p><?php echo $desc;   ?></p>
						            <h4>price: <span><?php echo $price;   ?></span></h4>
                        <h5>price updated by: <span><?php echo $cname; ?></span></h5>
                        <h6>phone: <span><?php echo $phone;   ?></span></h6>
                        <a href="bid.php?id=<?php echo $row['vmodel']; ?>" data-toggle="
                        tooltip" data-placement="bottom" title="EDIT"> <i class="fa fa-trash" aria-hidden="true">BID</i> </a>
                    </section>
                <?php
                }
                else{
                  echo "nothing to print";
                }
                ?>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>