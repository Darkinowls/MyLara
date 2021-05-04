@extends('layouts.myapp')

@section('head')
    <head>

        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1"/>
        <link rel="stylesheet" href="/resources/css/lending.css"/>
        {{--    <script type="text/javascript" src="Java.js"></script>--}}
        <link rel="shortcut icon" type="image/x-icon" href="img/header/Logo.png"/>
        <title>El'Strauss</title>


    </head>
@endsection

@section('content')
<body>

@foreach($goods as $good)
{{$good->type}}<br/>
@endforeach

<div class="window">
    <div class="gradient"></div>
    <div class="ground"></div>
    <div class="moto">
        <div class="description">
            <div class="title">
                <a href="?id=22">Електромотоцикл EM-22</a>
            </div>
            <ul>
                <li>дальність ходу 70 км</li>
                <li>макс. швидкість 90 км/год</li>
                <li>потужність 3000 Вт</li>
                <li>навантаження 180 кг</li>
                <li>вага 124 кг</li>
                <li>гарантія 24 місяці</li>
                <li>Ціна 49 900 ₴</li>
            </ul>
            <button class="button" type="button">Замовити</button>
        </div>
        <img src="img/2.png"/>
    </div>

</div>
<div class="slide">
    <div class="title">Акційні пропозиції</div>
    <a href="#">Переглянути всі</a>

    <div class="line">
        <div class="arrow1">
            <div class="l1"></div>
            <div class="l2"></div>
        </div>


        <?php

        //        require 'functions.php';
        //
        //        showBlock(11);
        //        showBlock(12);
        //        showBlock(24);

        ?>


        <div class="arrow2">
            <div class="l3"></div>
            <div class="l4"></div>
        </div>

    </div>
</div>
<div class="slide">
    <div class="title">Новини</div>
    <a href="#">Переглянути всі</a>

    <div class="line">
        <div class="arrow1">
            <div class="l1"></div>
            <div class="l2"></div>
        </div>


        <div class="block1">
            <a href="#"><img class="news" src="Imgs/Lending/Vod.png"/></a>
            <a class="name" href="#">Чи потрібні права на електроскутер?</a>
            <div>Серед величезної кількості моделей електроскутерів важко вибрати відповідну ...</div>
            <button class="button" type="button">Читати</button>
        </div>

        <div class="block2">
            <a href="#"><img class="news" src="Imgs/Lending/Block.png"/></a>
            <a class="name" href="#">Види та правила заряджання акумуляторів.</a>
            <div>Серед величезної кількості моделей електроскутерів важко вибрати відповідну ...</div>
            <button class="button" type="button">Читати</button>
        </div>

        <div class="block3">
            <a href="#"><img class="news" src="Imgs/Lending/Vod.png"/></a>
            <a class="name" href="#">Чи потрібні права на електроскутер?</a>
            <div>Серед величезної кількості моделей електроскутерів важко вибрати відповідну ...</div>
            <button class="button" type="button">Читати</button>
        </div>


        <div class="arrow2">
            <div class="l3"></div>
            <div class="l4"></div>
        </div>

    </div>

</div>
<div class="slide">
    <div class="title">Популярні моделі</div>
    <a href="#">Переглянути всі</a>

    <div class="line">
        <div class="arrow1">
            <div class="l1"></div>
            <div class="l2"></div>
        </div>

        <?php

        //        showBlock(11);
        //        showBlock(12);
        //        showBlock(24);

        ?>

        <div class="arrow2">
            <div class="l3"></div>
            <div class="l4"></div>
        </div>

    </div>
</div>
<div class="aboutUs">
    <div class="title">Про нас</div>
    <div class="blockBlue">
        <div class="text">
            <div>У нас можна знайти як дитячий електробайк так і потужні спортивні електромотоцикли,
                електротрицикли й електро квадроцикли, а також електроскутери в інтернет-магазині El’Straus ви отримуєте
                з
                безкоштовною доставкою та гарантією один рік. Ми продаємо за справедливою ціною і надаємо гарантію,
                через
                те, що
                вважаємо, що вся представлена продукція екологічно чиста, надійна і розрахована на тривалий термін
                експлуатації.
                І кожен раз, коли хтось натискає «Замовити», ми розуміємо, що робимо потрібну справу.
            </div>
            <div>Seo-текст ...</div>
        </div>
    </div>
    <div class="blockOrange">
        <div class="title">Наші Переваги</div>
        <div class="line">
            <div class="adv">
                <img src="Imgs/Lending/truck.png"/>
                <div>Безкоштовне та швидке відсилання</div>
            </div>
            <div class="adv">
                <img src="Imgs/Lending/truck.png"/>
                <div>Безкоштовне та швидке відсилання</div>
            </div>
            <div class="adv">
                <img src="Imgs/Lending/truck.png"/>
                <div>Безкоштовне та швидке відсилання</div>
            </div>
        </div>
    </div>
</div>

</body>

@endsection
