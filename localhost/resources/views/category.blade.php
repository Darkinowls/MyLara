@extends('layouts.myapp')

@section('head')

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="/resources/css/category.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="//localhost/public/img/header/logo.png"/>
        <title>El'Strauss</title>
    </head>

@endsection

@section('content')
    <body>




        <div class="slide">
            <div class="line">


                @foreach($objs as $obj)

                    @component('layouts.block' , ['obj' => $obj])
                    @endcomponent

                @endforeach

            </div>
        </div>




    </body>

@endsection
