<div class="block1">
    <a href="/public/good/{{$obj->id}}"><img class="bike" src="{{asset($obj->image)}}"/></a>

    <div class="markers">
    @foreach($obj->types as $type)
   <a href="/public/category/{{ $type->id}}">#{{$type->name}}</a>
    @endforeach
    </div>
    <a class="name" href="/public/good/{{$obj->id}}">{{$obj->name}}</a>
    <div class="money">{{$obj->price}}₴</div>
    <button class="button" type="button">Замовити</button>
</div>
