<?php

require_once("db.php");

session_destroy();

function Redirect($address)

{
    header("Location:".$address);
    die();
}

Redirect("../adminlogin.php");

?>