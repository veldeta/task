<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Задание 1 div > img выравнивание по центру -->
    <div class='block'>
        <img class="img" src="image/6-1600.jpg">
    </div>
    <div class='block'>
        <img class="img" src="image/09e69dc4187b1ad2dcf4c0b3a2af52c9.jpg">
    </div>
    <!-- div > img -->

    <!-- Задание 2 Горизонтальное меню -->


    <ul class="ul">
        <li class="li"><a href="#">Home</a></li>
        <li class="li"><a href="#">About</a></li>
        <li class="li"><a href="#">Login</a></li>
        <li class="li"><a href="#">Next</a></li>
        <li class="li"><a href="#">Back</a></li>
    </ul>


    <!-- Горизонтально меню -->

    <!-- Задание 3 Плавующие меню -->
    <ul class="ul">
        <li class="li">
            <a href="#">Home</a>
            <ul class="ul2">
                <li data-noprint class="ul_li">1</li>
                <li class="ul_li">2</li>
                <li class="ul_li">3</li>
                <li class="ul_li">4</li>
            </ul>
        </li>
        <li class="li"><a href="#">About</a>
            <ul class="ul2">
                <li class="ul_li">1</li>
                <li data-noprint class="ul_li">2</li>
                <li class="ul_li">3</li>
                <li class="ul_li">4</li>
            </ul>
        </li>
        <li class="li"><a href="#">Login</a>
            <ul data-id="1" class="ul2">
                <li class="ul_li">1</li>
                <li data-noprint class="ul_li">2</li>
                <li class="ul_li">3</li>
                <li class="ul_li">4</li>
            </ul>
        </li>
        <li class="li"><a href="#">Next</a>
            <ul class="ul2">
                <li class="ul_li">1</li>
                <li class="ul_li">2</li>
                <li class="ul_li">3</li>
                <li class="ul_li">4</li>
            </ul>
        </li>
        <li class="li"><a href="#">Back</a>
            <ul class="ul2">
                <li data-id="2" class="ul_li">1</li>
                <li data-noprint class="ul_li">2</li>
                <li data-id="3" class="ul_li">3</li>
                <li class="ul_li">4</li>
            </ul>
        </li>
    </ul>
    <!-- Плавующие меню -->


    <!-- Сортировка по высоте -->
    <div class="parent">
        <div class="class"><div class="text" style="width: 100px; height: 50px">50px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 70px">70px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 60px">60px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 100px">100px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 20px">20px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 19px">19px</div></div>
        <div class="class"><div class="text" style="width: 100px; height: 150px">150px</div></div>
    </div>
    <!-- Сортировка по высоте -->
    

    <script src="js/JQuery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
