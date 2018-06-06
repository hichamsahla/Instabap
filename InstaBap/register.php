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





    <h2>Registreren</h2>

    <form action="/register.php" style="border:1px solid #ccc">
        <div class="container">
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <input type="checkbox" checked="checked"> Remember me
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>

    </body>
    </html>



<section class="footer-bottom">
    2017 &copy; Hicham Sahla. BAP Opdracht.
</section>
