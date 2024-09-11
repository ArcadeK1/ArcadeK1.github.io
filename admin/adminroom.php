<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет администратора | МФЦ</title>
    <link rel="stylesheet" type="text/css" href="../css/rooms.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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


            <li>
                <a href="logic/logout.php" style="font-size: 28px; color:brown">
                    Выйти
                </a>
            </li>


        </ul>
    </nav>

    <div class="adminzone">


    <?php
    session_start();

    require_once('logic/db.php');

    

    if (!isset($_SESSION['admin_id'])) 
    {
        header('Location: adminlogin.php');
        exit();
    }


    if (isset($_SESSION['admin_login'])) 
    {
    
        $login = $_SESSION['admin_login'];

        $sql = "SELECT * FROM `admins` WHERE login = '$login'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
        // Получаем данные админа
            $row = $result->fetch_assoc();
            echo "<h2>Администратор  " . $row['login'] . "</h2>";

            echo '<div class = "sections">';
            echo '<a id = "selected" href="adminroom.php">Новости</a>';
            echo '<a href="carousel.php">Карусель</a>';
            echo '<a href="services.php">Услуги</a>';
            echo '</div>';

            echo '<div class = "addsomenews">';
            echo '<a href="newsadder.php">Добавить новости</a>';
            echo '</div>';


        // Другие данные о админе можно выводить аналогично
        } 
        else 
        {
            echo "Произошла ошибка при получении данных пользователя." . $conn->error;
        }
    } 


    


    $sql = "SELECT * FROM `news` ORDER BY ABS(DATEDIFF(CURDATE(), STR_TO_DATE(uploaddate, '%d.%m.%Y'))) ASC";


    $result = $conn->query($sql);

    if ($result -> num_rows > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<div id="newscard" style="height: auto;">';
            echo '<img src="'. '../' . $row["imageaddress"] . '" height = "240" >';
            echo '<div id = "newscarddesc">';
            
            echo '<h4> Новость № '. $row["id"]. '</h4> ';
            echo '<p> Заголовок: '. $row["header"]. '</p>';
            echo '<p> Дата выпуска: '. $row["uploaddate"]. '</p>';
            echo '<p> Описание: '. $row["description"]. '</p>';
            
            
            echo '<div id = "buttonset" style="display: flex;">';
            echo '<form method = "get" action = "logic/articleremover.php">';
            echo '<input type = "hidden" name="articleid" value ="'.$row["id"]. '"></input> ';
            echo '<button type = "submit" id = "submitbtn" style ="background-color:red;" >Удалить</button>';
            echo '</form>';

            
            echo '<form method = "post" action = "newseditor.php">';
            echo '<input type = "hidden" name="articleid" value ="'.$row["id"]. '"></input> ';
            echo '<input type = "hidden" name="head" value ="'.$row["header"]. '"></input> ';
            echo '<input type = "hidden" name="desc" value ="'.$row["description"]. '"></input> ';
            echo '<input type = "hidden" name="imgaddress" value ="'.$row["imageaddress"]. '"></input> ';
            echo '<button type = "submit" id = "submitbtn" style ="background-color:orange; margin-left: 10px;" >Изменить</button>';
            echo '</form>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }

    }
    else
    {
        echo "<p>Сейчас на сайте нет новостей</p>";
    }



    ?>
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>