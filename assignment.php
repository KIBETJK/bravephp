<?php
if(isset($_POST["submit"])){

    $fname=$_POST["fname"];
    $email=$_POST["email"];
    $pnumber=$_POST["pnumber"];
    $designation=$_POST["designation"];
    echo"Your name is $fname<br>";
    echo"Your email is $email<br>";
    echo"Your Phone Number is $pnumber<br>";
    echo"Your Designation is $designation<br>";
}

else{
    echo"<h3>Kindly fill this form</h3>";}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>POST METHOD</title>
    </head>
    <body>
    <form action="assignment.php" method="post">
        <div>
            <label >Full Name</label>
            <input type="text" name="fname">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label >Phone Number</label>
            <input type="text" name="pnumber">
        </div>
        <div>
            <label >Designation</label>
            <input type="text" name="designation">
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
<?php
