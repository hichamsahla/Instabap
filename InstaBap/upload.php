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

        <li><a href="upload.php">Upload</a></li>
    </ul>
    <form enctype="multipart/form-data" method="post" action="upload.php">
        <input type="file" name="image" /><br>
        <label for="description">Omschrijving (max. 140 tekens)</label>
        <textarea name="description" id="description" ></textarea>
        <input type="submit" name="submit" value="Uploaden Maar!"/>
    </form>
</section>




<?php

if(isset($_POST['submit'])){
    $dbc = mysqli_connect('localhost','h_23242','23242','23242_db') or die ('ERROR!');
    $description = mysqli_real_escape_string($dbc,trim($_POST['description']));
    $target = 'images/' . time() . $_FILES['image']['name'];
    echo $target;
    $temp = $_FILES['image']['tmp_name'];
    echo $temp;


    if(!empty($description)){
        echo 'blokje';
        if(move_uploaded_file($temp,$target)){
            echo '<br>Gelukt!';
            mysqli_query($dbc, "INSERT INTO instabap (description,target,username,) VALUES ('".$description."','".$target."','hicham',)");
        }
    }


}
?>


<section class="footer-bottom">
    2017 &copy; Hicham Sahla. BAP Opdracht.
</section>


</body>
</html>
