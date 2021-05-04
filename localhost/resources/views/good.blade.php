@extends('layouts.myapp')

@section('head')

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="/resources/css/good.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/header/Logo.png"/>
        <title>El'Strauss</title>
    </head>

@endsection

@section('content')

    <body>

    <div class="Good">
        <div class="Title">{{$obj->getName()}}-{{$obj->getId()}}</div>
        <br/>
        <img src="{{asset($obj->getImg())}}" width="400px"/>
        <div class="about">
            <div class="blockBlue">
                <div class="text">
                    <div> {{$obj->getInfo()}}</div>
                </div>
            </div>
        </div>
        <div class="Title">Ціна : {{$obj->getPrice()}}₴</div>
    </div>


    <div class="pop">
        <form method="post" action="{{route('post.comment')}}">
            @csrf
            <div>Введіть відгук</div>
            <br/>
            <input type="text" name="name" placeholder="Ім'я"/><br/>
            <input type="email" name="email" placeholder="Почта (необов'язково)"/><br/>
            <textarea name="text" placeholder="Введіть ваш коментар ..." rows="5" cols="30"></textarea><br/>
            <button class="button">Відправити</button>
        </form>
    </div>

    </body>

@endsection


