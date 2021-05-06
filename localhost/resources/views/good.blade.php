@extends('layouts.myapp')

@section('head')

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="/resources/css/good.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="//localhost/public/img/header/logo.png"/>
        <title>El'Strauss</title>
    </head>

@endsection

@section('content')

    <body>

    <div class="Good">
        <div class="Title">{{$obj->name}}</div>
        <br/>
        <img src="{{asset($obj->image)}}" width="400px"/>
        <div class="about">
            <div class="blockBlue">
                <div class="text">
                    <div> {{$obj->info}}</div>
                </div>
            </div>
        </div>
        <div class="Title">Ціна : {{$obj->price}}₴</div>
    </div>

    <div class="Comments">

        <div class="title">Коментарі</div>
        <div class="bLine">
            <button class="button">Переглянути всі</button>
            <button class="button" {{--onclick="showPop()"--}}>Залишити відгук</button>
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




        @foreach($obj->comments as $com)

        @component('layouts.comment' , ['com' => $com])
        @endcomponent

        @endforeach

    </div>

    </body>

@endsection


