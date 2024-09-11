<?php

require_once("db.php");


$servicename = $_POST['servicename'];


function Redirect($address)

{
    header("Location:".$address);
    die();
}

$image = $_POST['image'];


$targetfile = "media/img/".basename($image);


$sql = "INSERT INTO `services` (imageaddress, description) VALUES ('$targetfile', '$servicename')";

if ($conn -> query ($sql) === TRUE)
    {
        session_start();
        Redirect("../services.php");
    }
    else
    {
        echo "Ошибка соединения: ".$conn->error;
    }

?>