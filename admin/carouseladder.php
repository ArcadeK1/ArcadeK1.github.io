<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить постер в карусель | МФЦ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/rooms.css">
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
                <a href="adminroom.php" style="font-size: 28px;">
                    Кабинет администратора
                </a>
            </li>


        </ul>
    </nav>

    <div class="addnewspage">
        <h2>Добавить постер в карусель</h2>
        <div class="addnewsform">
        <form action="logic/newposter.php" method="post">
        <label for="title">Слоган</label><br>
        <input type="text" style="width: 460px;" id="title" name="slogan" required><br><br>
        
        <label for="image">Изображение:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <input id = "createbtn" type="submit" value="Добавить постер">
        </div>
      
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>