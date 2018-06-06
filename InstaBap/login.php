<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>InstaClone</title>

    <link rel="stylesheet" type="text/css" href="css/style.scss">

</head>
<body>
<header style="height: 185px;">



    <div class="name fancy-font">
        InstaClone
    </div>
    <div class="titles">
        <h1>Hey <span>Welkom Op Instaclone</span></h1>
        <h2>BAP Instaclone</h2>
    </div>


</header>


    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Registreren</a></li>
        <li><a href="upload.php">Upload</a></li>
    </ul>

    <h2>Login Form</h2>

    <form action="login.php">


        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>



<section class="footer-bottom">
    2017 &copy; Hicham Sahla. BAP Opdracht.
</section>

