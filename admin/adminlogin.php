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

    <div class="adminlogin">
        <h2>Вход в кабинет администратора Admin Desk</h2>
        <div class="loginform">
            <form method = "post" action="logic/loginlogic.php">
               <label>Логин</label>
               <input type="text" name = "login" placeholder="Ваш логин" required> <br>
               <label>Пароль</label>
               <input type="password" name="pass" placeholder="Ваш пароль" required><br>

               <button id = "submitbtn" type="submit">Войти</button>

            </form>
        </div>
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>