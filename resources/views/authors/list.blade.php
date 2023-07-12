<html>
    <head>

    </head>
    <body>
      

@foreach ($avtori as $avtor)
    <li>
        <a href="{{ route('avtor.prikazi',['authorId'=> $avtor->id ]) }}">{{$avtor->firstName}} {{ $avtor->lastName}}</a>;
    </li>
@endforeach
</ul>
            
    </body>
</html>