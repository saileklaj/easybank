<?php

require 'Connection.php';
session_start();

$Username=$_POST['Username'];
$Password=$_POST['Password'];


$query= "select count(*) as count from users where Username='$Username' and Password='$Password'";


$result= mysqli_query($connection, $query);
$array= mysqli_fetch_array($result);

if ($array['count']>0)
    {
        $_SESSION['Username']=$Username;
        header("location:../Views/Welcome.php");

    }
    else
    {
        echo "Authentication Error!";
    }
    






/*$files=mysqli_num_rows($result);
    if($files>0){
        header("location:../Views/Welcome.html");

    }
    else{
        echo "Authentication Error!";
    }
    mysqli_free_result($result);
    mysqli_close($connection);
*/
