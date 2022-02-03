<?php
if(isset($_POST["submit"])){

$fname=$_POST["fname"];
$sname=$_POST["sname"];
    echo"First name picked is $fname<br>";
    echo"Second name picked is $sname<br>";
}

else{
    echo"<h3>Kindly fill the form</h3>";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>
<form action="post.php" method="post">
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