<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<select name="sorteermenu">
<option value="date_asc">datum oplopend</option>
<option value="date_desc">datum aflopend</option>
<option value="descr_asc">beschrijving oplopend</option>
<option value="descr_desc">beschrijving aflopend</option>
</select>
    <input type="submit" name="submit_sort" value="sorteren"/>
</form>
<?php
$column = 'date';
    $order = 'DESC';
if (isset($_POST['submit_sort'])){
    switch ($_POST['sorteermenu']){
        case 'date_asc' : $column = 'date';
        $order = 'ASC';
        break;
    }
}
?>


<?php

$dbc = mysqli_connect('localhost','h_23242','23242','23242_db') or die ('Error Connecting');
$query = "SELECT * FROM instabap ORDER BY $column_$order ";
$result = mysqli_query($dbc,$query);
while ($row = mysqli_fetch_array($result)){
    $target = $row['target'];
    $date = $row ['date'];
    $username = $row['username'];
    $description = $row['description'];
    echo '<img src="'. $target .'"/<br>';
    echo $date . '' . $username . '' . $description . '<br>';



}

mysqli_close($dbc);

?>




</section>

<section class="footer-bottom">
    2017 &copy; Hicham Sahla. BAP Opdracht.
</section>

</body>
</html>