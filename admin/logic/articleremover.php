<?php

require_once("db.php");


function Redirect($address)

{
    header("Location:".$address);
    die();
}


    $news_id = $_GET["articleid"];

    $sql = "DELETE FROM `news` WHERE id = '$news_id'";
    if ($conn -> query ($sql) === TRUE)
    {
        echo "Успех";  
        Redirect("../adminroom.php"); 
    }
    else
    {
        echo "Ошибка соединения: ".$conn->error;
    }

?>