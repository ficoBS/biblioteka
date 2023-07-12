<html>
    <head>

    </head>
    <body>
        <ol>
        <li><a href="korisnici">Korisnici</a></li>
        <li><a href="avtori">Avtori</a></li>
        </ol>


        <ul>

            @foreach ($knige as $kniga)
                <li>
                    <a href="{{ route('kniga.prikazi',['bookId'=> $kniga->id ]) }}">{{$kniga->title}}</a>;
                </li>
            @endforeach
        </ul>
    </body>
</html>