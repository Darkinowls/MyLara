@extends('layouts.myapp')

@section('head')

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="/resources/css/catalog.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="img/header/Logo.png"/>
        <title>El'Strauss</title>
    </head>

@endsection

@section('content')
    <body>

    @if (count($objs)>0)

        @for($i = 0; $i < 3; $i++)

            <div class="slide">
                <div class="line">

                    @foreach($objs as $obj)

                    <div class="block1">
                        <a href="#"><img class="bike" src="{{asset($obj->getImg())}}"/></a>
                        <a class="name" href="#">{{$obj->getType()}} ET-{{$obj->getId()}}</a>
                        <div class="money">{{$obj->getPrice()}}₴</div>
                        <button class="button" type="button">Замовити</button>
                    </div>

                    @endforeach

                </div>
            </div>

        @endfor


    @else <h2> There are no objects </h2>

    @endif

    </body>

@endsection
