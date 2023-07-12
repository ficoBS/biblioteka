<html>
    <head>

    </head>
    <body>
      

@foreach ($users as $user)
    <li>
        {{$user->firstName}} {{ $user->lastName}}
    </li>
@endforeach
</ul>
            
    </body>
</html>