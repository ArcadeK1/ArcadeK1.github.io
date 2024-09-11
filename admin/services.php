<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги | МФЦ</title>
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
            echo '<a href="adminroom.php">Новости</a>';
            echo '<a href="carousel.php">Карусель</a>';
            echo '<a id = "selected" href="services.php">Услуги</a>';
            echo '</div>';

            echo '<div class = "addsomenews">';
            echo '<h5>Помните: с большой силой приходит большая ответственность.</h5>';
            echo '<a href="serviceadder.php">Новая услуга</a>';
            echo '</div>';


        // Другие данные о админе можно выводить аналогично
        } 
        else 
        {
            echo "Произошла ошибка при получении данных пользователя." . $conn->error;
        }
    } 


    


    $sql = "SELECT * FROM `services`";


    $result = $conn->query($sql);

    if ($result -> num_rows > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<div id="newscard" style="height: auto;">';
            echo '<img src="'. '../' . $row["imageaddress"] . '" height = "240" >';
            echo '<div id = "newscarddesc">';
            
            echo '<h4> Услуга № '. $row["id"]. '</h4> ';

            echo '<p> Описание: '. $row["description"]. '</p>';
            
            echo '<form method = "get" action = "logic/serviceremover.php">';
            echo '<input type = "hidden" name="serviceid" value ="'.$row["id"]. '"></input> ';
            echo '<button type = "submit" id = "submitbtn" style ="background-color:red;" >Удалить</button>';
            echo '</form>';


            echo '</div>';
            echo '</div>';
        }

    }
    else
    {
        echo '<p style = "text-align:center;" >Пока нет услуг.</p>';
    }



    ?>
    </div>


    <?php
        require_once('../headerfooter/footer.php');
    ?>



    

   
</body>
</html>