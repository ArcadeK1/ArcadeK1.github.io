<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет администратора | МФЦ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    
    <nav class="navbar">
        <ul>
            <li class="logo">
                <a href="adminlogin.php">
                    <img id="mfclogo" src = "../media/img/logobw.png" height="65" alt = "img">
                </a>
            </li>

            <li>
                <a href="adminlogin.php" style="font-size: 28px;">
                    Кабинет администратора
                </a>
            </li>


        </ul>
    </nav>

    <div class="youshouldntbethere">
        <h2>Неверный логин или пароль.</h2>
        <a href="adminlogin.php"  id = "submitbtn" style="font-size: 28px; text-align:center; background-color:red;">Назад</a>
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>