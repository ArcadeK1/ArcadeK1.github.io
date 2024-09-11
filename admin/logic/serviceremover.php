<?php

require_once("db.php");


function Redirect($address)

{
    header("Location:".$address);
    die();
}


    $serviceid = $_GET["serviceid"];

    $sql = "DELETE FROM `services` WHERE id = '$serviceid'";
    if ($conn -> query ($sql) === TRUE)
    {
        echo "Успех";  
        Redirect("../services.php"); 
    }
    else
    {
        echo "Ошибка соединения: ".$conn->error;
    }

?>