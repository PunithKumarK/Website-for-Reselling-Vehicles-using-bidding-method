<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","hobby");

if(!$conn)
{
    echo "not connected to server";
}

if(!mysqli_select_db($conn,'hobby'))
{
    echo 'database not selected';
}
$email = $_POST['email'];  
$password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from register where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
    if($count === 1){   
    if($_POST['submit1'])
    {
    header('Location:home.php');
    } 
    }  
    
        

?>
<!DOCTYPE html>
<html>
    <head>
        <title>hello</title>
        <style>
            *{
             padding: 0;
             margin: 0;
             font-family: sans-serif;
             }

            h1{
                color: blue;
            }
            .login{
                width: 400px;
                line-height: 25px;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                position: absolute;
                background : white;
                border-radius: 10px;
            }

            .login h3{
                text-align : center;
                padding: 0 0 20px 0;
                border-bottom : 1px solid silver;
            }

            .login form{
                padding: 0 25px;
                box-sizing: border-box;
            }

            body{
                background-color: black;
                background-size: cover;
            }

            .menu{
                  background:cornflowerblue;
                  height: 100px;
                  width: 100%;
                  }

            .menu ul{
                 float: right;
                 margin-right: 20px;
                    }

            .menu ul li{
                 display: inline-block;
                 line-height: 80px;
                 margin: 0 150px;
                    }

            .content{
                color: white;
                    }

            .login button{
                    display: block;
                    border: 0;
                    font-size: 14px;
                    padding: 14px 28px;
                    border-radius: 28px;
                    background: palegreen;
                    color: #ffffff;
                    cursor: pointer;
                    transition: all 0.3s linear;
                    margin: 30px 0;
                        }

            .content{
                color: white;
                    }

            .search{
                 display: inline-block;
                 line-height: 20px;
                 margin: 0 20px ;
                   }

            .login h3{
                 font-size: 40px;
                 text-align: center;
                 text-transform: uppercase;
                 margin: 40px 0;
                  }

            .login p {
                font-size: 20px;
                margin:15px 0; 
                   }

            .login input {
                font-size: 16px;
                width: 100%;
                padding: 15px 10px;
                 }

            .form .txt_field{
                margin: 30px 0;
            }

            .error{
                color: red;
            }

            

        </style>
    </head>
    <body>
        <div class="login">
        <h3>Login</h3>
        <form action='#' method="post">
            <?php
            if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } 
            ?>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="User Name" id="email" required/>
            <br>
            <br>
            <label for="password">password</label>
            <input type="password" name="password" placeholder="password" id="password" required/>
            <br>
            <input type="submit" name="submit1" value:"redirect">
            <br>
            <li><a href='createnew.php'>create new account</a></li>
            <br>
        </form>
        </div>
        <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">WELCOME TO OUR WEBSITE</h2>
             </div>
            <div class="menu">
                <ul>
                    <li><a href='#' name='home'>HOME</a></li>
                    <li><a href='newhtml.html'>ABOUT</a></li>
                    <li><a href='contacthtml.html'>CONTACT</a></li>
                    <li><a href='#'>FEEDBACK</a></li>
                 </div>
             </ul>
    </body>
</html>
