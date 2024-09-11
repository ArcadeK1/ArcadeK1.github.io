<?php

require_once("db.php");


$header = $_POST['title'];

$description = $_POST['description'];

function Redirect($address)

{
    header("Location:".$address);
    die();
}

$date = new DateTime();

$timezone = new DateTimeZone('Asia/Yekaterinburg');

$date->setTimezone($timezone);

$uploadDate = $date->format('d.m.Y');

$image = $_POST['image'];


$targetfile = "media/img/".basename($image);


$sql = "INSERT INTO `news` (header, description, imageaddress, uploaddate) VALUES ('$header', '$description', '$targetfile', '$uploadDate')";

if ($conn -> query ($sql) === TRUE)
    {
        session_start();
        Redirect("../adminroom.php");
    }
    else
    {
            echo "Ошибка соединения: ".$conn->error;
    }

?>