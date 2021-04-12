<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    #centered1{
        position: absolute;
        font-size: 10vw;
        top: 30%;
        left: 30%;
        transform: translate(-50%,-50%);
    }
    #centered2{
        position: absolute;
        font-size: 10vw;
        top: 50%;
        left: 40%;
        transform: translate(-50%,-50%);
    }
    #centered3{
        position: absolute;
        font-size: 10vw;
        top: 70%;
        left: 30%;
        transform: translate(-50%,-50%);
    }
    #signup{
        width: 60%;
        border-radius: 30px;
    }
    #login{
        background-color: #fff;
        color: #1da1f2;
        border-radius: 30px;
        border: 1px solid #1da1f2;
        width: 60%;
    }
    #login:hover{
        width: 60%;
        
        background-color: #fff;
        color: #1da1f2;
        border-radius: 30px;
        border: 2px solid #1da1f2;
    }
    .well{
        background-color: #187FAB;
    }

</style>
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color: white;">Social Networking World</h1></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" style="left: 0.5%;">
            <img src="images/pic1.jpeg" alt="" class="img-rounded" title="Social Networking" width="650px" height="565px">
            <div id="centered1" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow Your Interests.</strong></h3></div>
            <div id="centered2" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Hear what People are talking about.</strong></h3></div>
            <div id="centered3" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join The Conversations.</strong></h3></div>
        </div>
        <div class="col-sm-6" style="left: 8%;">
        <img src="images/logo.png" alt="" class="img-rounded" title="Social Networking" width="80px" height="80px">
        <h2><strong>See what's happening in the <br> the world right now</strong></h2><br><br>
        <h4><strong>Join Our Community Today.</strong></h4>
        <form method="post" action="">
            <button id="signup" class="btn btn-info btn-lg" name="signup">Sign Up</button><br><br>
            <?php
                if(isset($_POST['signup'])){
                    echo "<script>window.open('signup.php','_self')</script>";
                }
            ?>
            <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
            <?php
                if(isset($_POST['login'])){
                    echo "<script>window.open('signin.php','_self')</script>";
                }
            ?>
        </form>
        </div>
    </div>
    
</body>
</html>