<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактор новостей | МФЦ</title>
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


    <?php
    session_start();

    require_once('logic/db.php');


        $news_id = $_POST["articleid"];

        $newheader = $_POST["head"];


        $newimg = $_POST["newimg"];


        $sql1 = "SELECT description FROM `news` WHERE id = '$news_id'";


        $result = $conn->query($sql1);
    
        if ($result -> num_rows > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo " <h2>Отредактировать новость</h2> ";
                echo ' <div class="addnewsform"> ';
                echo ' <form action="logic/editanarticle.php" method="post">';
                echo ' <label for="title">Заголовок:</label><br>';
       echo '<input type = "hidden" name="editid" value ="'.$news_id. '"></input> ';
       echo ' <input type="text" style="width: 460px;" id="title" name="newtitle" value ="' .$newheader. '" required><br><br>';
        
       echo ' <label for="content">Содержание:</label><br>';
       echo ' <textarea id="content" style="width: 460px; height: 200px;" name="newdesc">'.$row["description"]. '</textarea><br><br>';
        
       echo ' <label for="image">Изображение:</label><br>';
       echo ' <input type="file" id="image" name="newimage"><br><br>';
        
       echo ' <input id = "createbtn" type="submit" value="Изменить новость">';
       echo ' </div> ';
            }
    
        }
        else
        {
        }

      
        ?>
    </div>
    


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>