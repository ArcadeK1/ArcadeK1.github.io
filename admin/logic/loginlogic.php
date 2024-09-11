<?php


require_once("db.php");


$login = $_POST["login"];

$password = $_POST["pass"];



function Redirect($address)

{
    header("Location:".$address);
    die();
}



if (empty($login) || empty($password))
{
    echo "Заполните ВСЕ поля.";
}
else
{
    $sql = "SELECT * FROM `admins` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows>0)
        {

            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_login'] = $row['login'];
            Redirect("../adminroom.php");
        }
        else
        {
            Redirect("../nosuchuser.php");
        }
}




?>