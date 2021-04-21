@extends('layouts.myapp')

@section('head')

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="/resources/css/good.css"/>
        <title>El'Strauss</title>
    </head>

@endsection

@section('content')

    <body>

@component('layouts.component')
    @slot('Type')
        {{$obj->getType()}}
    @endslot
    @slot('Id')
        {{$obj->getId()}}
    @endslot
    @slot('Img')
        {{$obj->getImg()}}
    @endslot
    @slot('Info')
        {{$obj->getInfo()}}
    @endslot
    @slot('Price')
        {{$obj->getPrice()}}
    @endslot
@endcomponent

@component('layouts.component')
    @slot('Type')
        {{$obj->getType()}}
    @endslot
    @slot('Id')
        {{$obj->getId()}}
    @endslot
    @slot('Img')
        {{$obj->getImg()}}
    @endslot
    @slot('Info')
        {{$obj->getInfo()}}
    @endslot
    @slot('Price')
        {{$obj->getPrice()}}
    @endslot
@endcomponent



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


