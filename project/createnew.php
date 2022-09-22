<?php

$conn = mysqli_connect("localhost","root","","hobby");

if(!$conn)
{
    echo "not connected to server";
}

if(!mysqli_select_db($conn,'hobby'))
{
    echo 'database not selected';
}

$name = $_POST['first'];
$name1 = $_POST['last'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass1 = $_POST['passwordc'];

if($pass!=$pass1)
{
    echo "password error";
}
else
{
$sql="INSERT INTO 'register'(`first`, `last`, `email`, `password`, `passwordc`) VALUES ('$name','$name1','$email','$pass','$pass1')";


if(!mysqli_query($conn,$sql))
{
    echo "not inserted";
}
else{
    echo "inserted";
    if($_POST['submit1'])
    {
       header('Location:sample.php');
    } 
}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <style>
            *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body{
    background-color:black;
    background-size: cover;
}

.signup{
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: #fff;
}

.signup h1{
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}

.signup p {
    font-size: 20px;
    margin:15px 0;
}

.signup input{
    font-size: 16px;
    width: 100%;
    padding: 15px 10px;
}
        </style>
    </head>
<body>


        <div class="signup">
            <h1>create new account</h1><br>
            <a href="sample.php"></a>
            <form action='#' method="post">
                <p>First name</p>
                <input type="text" name="first" placeholder="First Name">
                <p>Last name</p>
                <input type="text" name="last" placeholder="Last Name">
                <p>Email</p>
                <input type="mail" name="email" placeholder="email">
                <p>Set new password</p>
                <input type="password" name="password" placeholder="password">
                <p>confirm password</p>
                <input type="password" name="passwordc" placeholder="confirm password">
                <br>

                <input type="submit" name="submit1" value:"redirect">
            </form>
        </div>       
</body>
</html>