<?php

$servername = "127.0.0.1";
$dbname = "MFCData";
$username = "root";
$dbpassword = "";



$conn = mysqli_connect($servername,$username, $dbpassword, $dbname);


if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
else
{
    echo " ";

}


?>