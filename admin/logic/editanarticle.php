<?php

require_once("db.php");



function Redirect($address)

{
    header("Location:".$address);
    die();
}


    $editid = $_POST["editid"];

    $header = $_POST['newtitle'];

    $description = $_POST['newdesc'];

    $imgaddr = $_POST['newimage'];

    $newfile = "media/img/".basename($imgaddr);


    if ($imgaddr != null)
    {
        $sql = "UPDATE `news` SET header = '$header', description = '$description', imageaddress = '$newfile' WHERE id = '$editid'";
    }

    else
    {
        $sql = "UPDATE `news` SET header = '$header', description = '$description' WHERE id = '$editid'";
    }

    
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