<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить новость | МФЦ</title>
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
        <h2>Добавить новость</h2>
        <div class="addnewsform">
        <form action="logic/newsetofnews.php" method="post">
        <label for="title">Заголовок:</label><br>
        <input type="text" style="width: 460px;" id="title" name="title" required><br><br>
        
        <label for="content">Содержание:</label><br>
        <textarea id="content" style="width: 460px; height: 200px;" name="description" required></textarea><br><br>
        
        <label for="image">Изображение:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>
        
        <input id = "createbtn" type="submit" value="Добавить новость">
        </div>
      
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>