<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","hobby");

$update = false;

$id = 0;

$price = '';
$model = '';
$cname = '';

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
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $price = $_POST['vprice'];
    $cname = $_POST['cname'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE upload SET vprice = '$price' , cname='$cname' , phone='$phone' WHERE vmodel='$model'") or die($conn->error);
    
}

if($_POST['update'])
{
    header('Location:buy.php');
}
else{
    echo "error";
} 





?>
<!DOCTYPE html>
<html>
    <head>
        <title>PASSENGER</title>
        <style>
            *{
             padding: 0;
             margin: 0;
             font-family: sans-serif;
             }

            h1{
                color: blue;
            }
            .passenger{
                width: 500px;
                line-height: 25px;
                top: 50%;
                right: 20%;
                transform: translate(-50%, -50%);
                position: absolute;
                background : white;
                border-radius: 10px;
            }

            .passenger form{
                padding: 0 40px;
                box-sizing: border-box;
            }

            .passenger input {
                font-size: 16px;
                width: 100%;
                padding: 15px 10px;
                 }

            .form .txt_field{
                margin: 50px 0;
            }

            body{
                background-color: cornflowerblue;
            }


        </style>
</head>
<body>
<div class="passenger">
        <form action='#' method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            <h1>UPDATE DETAILS</h1>
            <br>
            <label for="vmodel">vehicle model</label>
            <input type="text" name="vmodel" value="<?php echo $model; ?>" placeholder="price" readonly>
            <br>
            <label for="vprice">vehicle price</label>
            <input type="text" name="vprice" value="<?php echo $price; ?>" placeholder="price" >
            <br>
            <label for="cname">customer name</label>
            <input type="text" name="cname" placeholder="customer name">
            <br>
            <label for="phone">phone</label>
            <input type="number" name="phone" placeholder="phone">
            <br>
            <div class="submit">
                
            <input type="submit" class= "btn btn-primary" name="update" value="update">
            
        </div>

</body>
</html>
