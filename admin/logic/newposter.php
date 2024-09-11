<?php

require_once("db.php");


$slogan = $_POST['slogan'];


function Redirect($address)

{
    header("Location:".$address);
    die();
}

$image = $_POST['image'];


$targetfile = "media/img/".basename($image);


$sql = "INSERT INTO `carousel` (slogan, image) VALUES ('$slogan', '$targetfile')";

if ($conn -> query ($sql) === TRUE)
    {
        session_start();
        Redirect("../carousel.php");
    }
    else
    {
        echo "Ошибка соединения: ".$conn->error;
    }

?>