<?php
if(isset($_GET["submit"])){
$fname=$_GET["fname"];
$sname=$_GET["sname"];
echo"First name picked is $fname<br>";
    echo"Second name picked is $sname<br>";
}else{
    echo"<h3>Kindly fill the form</h3>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET METHOD</title>
</head>
<body>
<form action="getmethod.php" method="get">
    <div>
        <label >First Name</label>
    <input type="text" name="fname">
    </div>
    <div>
        <label>Second Name</label>
        <input type="text" name="sname">
    </div>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>