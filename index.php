<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многофункциональный центр | МФЦ</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rooms.css">
    
</head>
<body>
    
    <?php

        require_once('headerfooter/header.php');
    ?>

    <!-- Slider and Slides -->
    <div class="slider">

        <?php
        require_once("admin/logic/db.php");

        $sql = "SELECT * FROM `carousel`";


    $result = $conn->query($sql);

    if ($result -> num_rows > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
        echo '<div class="slide">';
        echo '<h2>' . $row['slogan'] .'</h2>';
        echo '<img src="'. '' . $row["image"] . '" alt = "carouselimage"/>';
        echo '</div>';
        }

}
    else
    {
        echo '<div class="slide">';
        echo '<h2>Сейчас на сайте нет постеров в карусели</h2>';
        echo '</div>';
    }


        ?>
        <!-- Slide 1 -->
        <!--<div class="slide">
            <h2>МФЦ становится ещё удобнее</h2>
          <img src="media/img/familybanner.png" alt="family" />
        </div>
      
        Slide 2 
        <div class="slide">
            <h2>Продвигаем компьютерную грамотность среди пожилых людей</h2>
          <img src="media/img/elders.png" alt="elders" />
        </div>
      
        <Slide 3 
        <div class="slide">
            <h2>Дистанционное электронное голосование вместе с МФЦ</h2>
          <img src="media/img/digivoting.png" alt="digivoting" />
        </div>
        -->
        <!-- Control Buttons -->
        <button class="slidebtn btn-next"> &#62;</button>
        <button class="slidebtn btn-prev"> &#60; </button>
        
    </div>



    <div class="freshnews" id="newssection">

    <h2>Новости</h2>

    <?php

    require_once("admin/logic/db.php");
    
    $sql = "SELECT * FROM `news` ORDER BY ABS(DATEDIFF(CURDATE(), STR_TO_DATE(uploaddate, '%d.%m.%Y'))) ASC LIMIT 3";


    $result = $conn->query($sql);

    if ($result -> num_rows > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<div id="newscard" style="height: auto;">';
            echo '<img src="'.$row["imageaddress"]. '" height = "240" >';
            echo '<div id = "newscarddesc">';
            
            echo '<p> '. $row["header"]. '</p>';
            echo '<p style="font-weight: regular; font-size:18px;" > ' ."Опубликовано: ". $row["uploaddate"]. '</p>';
            echo '<p> '. $row["description"]. '</p>';


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





<!-- About Us Section-->
    <div class="aboutus" id="aboutsection">
        
        <h1>О Многофункциональном центре</h1>

        <p>Мы приветствуем Вас на сайте Государственного бюджетного учреждения </p>

        <p>"Многофункциональный центр по предоставлению государственных и муниципальных услуг" (ГБУ "МФЦ") Курганской области. </p>
    

        <p>Сегодня МФЦ оказывает более 220 государственных, региональных, муниципальных и иных услуг таких ведомств, как:</p>
        
        <div id="aboutuslist">
        <ul>
            <li>Управление Министерства внутренних дел РФ по Курганской области;</li>
            <li>Управление Федеральной службы Государственной Регистрации Кадастра и Картографии по Курганской области;</li>
            <li>Управление Федеральной службы Государственной Регистрации Кадастра и Картографии по Курганской области;</li>
            <li>Управление Пенсионного фонда Российской Федерации по Курганской области;</li>
            <li>Главное управление социальной защиты населения Курганской области;</li>
            <li> Департамент экономического развития Курганской области;</li>
        </ul>
        </div>
        <p>и др.</p>

        <div id="servicecards">
        <h2>Услуги</h2>
        </div>

        <?php

        require_once("admin/logic/db.php");
    
        $sql = "SELECT * FROM `services`";


        $result = $conn->query($sql);

        if ($result -> num_rows > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo '<div id="serivcecard" style="height: auto;">';
                echo '<img src="'.$row["imageaddress"]. '" height = "100" alt = "'.$row["id"]. '">';
                echo '<p>'.$row["description"].'</p>';
                echo '</div>';
            }

        }
        else
        {
            echo "<p>Пока сотрудники МФЦ не придумали, что сказать про услуги. Но сами услуги есть.</p>";
        }


    ?>

    </div>

       <!-- 

        
    -->

    </div>



    <div class="serviceexamples">
        <p>В Многофункциональном центре работают вежливые и пунктуальные сотрудники, <br> готовые помочь в трудную минуту.</p>
        <h2>Узнайте, как работает обслуживание клиентов в ГБУ "МФЦ"</h2>
        <div class="servicebg">
            <div id="phrase1">
                <img src="media/img/phrase1.png" height="170" alt="phrase1bubble">
            </div>
            <div id="phrase2">
                <img src="media/img/phrase2.png" height="180" alt="phrase2bubble">
            </div>

            
        </div>
        <button id="tryme">Посмотреть</button>
        
    </div>
    

    <div class="contacts" id="contactssection">
        <h1>Контакты</h1>
        <img src="media/img/map.png" height = "350" alt="map">
        <h3>Наши филиалы:</h3>

        <p>КГО №1: г. Курган, ул. Куйбышева 144, ст. 41</p>
        <p>КГО №2: ул. Невежина 3, ст.10, 2 этаж (ТРЦ "РИО")</p>
        <p>КГО №3: 5 мкр., д.37 </p>   
        <p>КГО №4: пр. Конституции, д. 73/I</p>
        <h3>Телефон:</h3>
        <p>8 (3522) 44-35-36</p>
        
        <h3>Email:</h3>
        <p>mfc@kurganobl.ru</p>

    </div>

    <div class="popupbg" style="display: none;"></div>


    <div class="subscribepopup" style="display: none;">
        
        <div class="updates_subscription">
            
            <h2>Подпишитесь на обновления здесь:</h2>
            <form>
                <label>ФИО:</label> <br>
                <input id = "subscribename" type="text" placeholder="Ваше ФИО" required><br>
                <label>Еmail:</label> <br>
                <input id = "subscribeemail" type="email" placeholder="Ваш email" required><br>
                <input type="checkbox" required>
                <label>Я согласен/согласна с Политикой конфиденциальности <br>и Федеральным законом N 152-ФЗ "О персональных данных"</label> <br>
                <input id = "submitbtn" placeholder="Отправить"  type="submit">
                
            </form>
            <span>Закрыть ×</span>
            
        </div>


    </div>

    <div class="updates">
        <div class="updatesform">
            <h2>Подпишитесь на обновления по почте</h2>
            <img src = "media/img/receiving-email_27c5571306.jpg" height="200" alt = "emailimg">
            <p>Получайте актуальную информацию о Многофункциональном центре прямо на Вашу электронную почту при помощи встроенной системы почтовой рассылки.</p>
            <button class="subbtn">Подписаться</button>
        </div>
        
        
    </div>


    <?php
        require_once('headerfooter/footer.php');
    ?>



    

    <script src="js/anime.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery-2.0.2.min.js"></script>

    <script>

    $(document).ready(function(){
  
     
        $('.subbtn').click(function(){
        $('.subscribepopup, .popupbg ').fadeIn();
        })
         $('.subscribepopup span').click(function(){
         $('.subscribepopup, .popupbg ').fadeOut();
        })

  
    });


    </script>
</body>
</html>