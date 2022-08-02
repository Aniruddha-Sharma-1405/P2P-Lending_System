<?php

if(isset($_POST['lname']))
{
    $lname = $_POST['lname'];
    $lemail = $_POST['lemail'];
    $lpass = $_POST['lpass'];
    $lrepass =$_POST['lrepass'];
    if($lpass == $lrepass)
    {
        $con = mysqli_connect('localhost', 'root','','lender');
        $lsql="INSERT INTO `lusers` (`name`, `email`, `pass`) VALUES ('$lname', '$lemail', '$lpass')";
        $lrs = mysqli_query($con, $lsql);
    }
    else
    {
        echo "Passwords not matching";
    }
}
if(isset($_POST['bname']))
{
    $bname = $_POST['bname'];
    $bemail = $_POST['bemail'];
    $bpass = $_POST['bpass'];
    $brepass =$_POST['brepass'];
    if($bpass == $brepass)
    {
        $con = mysqli_connect('localhost', 'root','','lender');
        $bsql="INSERT INTO `busers` (`name`, `email`, `pass`) VALUES ('$bname', '$bemail', '$bpass')";
        $brs = mysqli_query($con, $bsql);
    }
    else
    {
        echo "Passwords not matching";
    }
}
if($lrs)
{
    header('Location: '."/Lender/L_Login.html");
}
else
{
    echo "No Values Inserted";
}
if($brs)
{
    header('Location: '."/Borrower/B_Login.html");
}
else
{
    echo "No Values Inserted";
}
?>
