<?php

$marks= -40;

if($marks>=70)
{
    $grade='A';
    echo "<strong>Congratulations! You have an A</strong>";
}
elseif($marks<70 && $marks>=60)
{
    $grade='B';
    echo "<strong>Congratulations! You have a B</strong>";
}
elseif($marks<60 && $marks>=50)
{
    $grade='C';
    echo "<strong>Congratulations! You have a C<strong>";
}
elseif($marks<50 && $marks>=40)
{
    $grade='D';
    echo "<strong>Congratulations! You have a D</strong>";
}
elseif($marks<0 && $marks>100)
{
    $grade='D';
    echo "<strong>Invalid Input</strong>";
}

else
{
    echo "<strong>Sorry, you failed!</strong><br>";
    echo "<strong>Study hard</strong>";
}
?>