<div class="comment">
    <img class="pers" src="//localhost/public/img/header/person.png"/>
    <div class="content">
        <div class="name">{{$com->name}}<span>
                {{$com->created_at}}
                @if($com->created_at != $com->updated_at)
                    (updated)
                @endif
            </span></div>
        <div class="text">{{$com->text}}</div>
    </div>
</div>
