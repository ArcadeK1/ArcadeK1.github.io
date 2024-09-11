<?php

require_once("db.php");


function Redirect($address)

{
    header("Location:".$address);
    die();
}


    $poster_id = $_GET["posterid"];

    $sql = "DELETE FROM `carousel` WHERE id = '$poster_id'";
    if ($conn -> query ($sql) === TRUE)
    {
        echo "Успех";  
        Redirect("../carousel.php"); 
    }
    else
    {
        echo "Ошибка соединения: ".$conn->error;
    }

?>