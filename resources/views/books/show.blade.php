<h3>Ime na kniga: {{ $book->title}}</h3>
<h3>Broj na strani: {{ $book->pages}}</h3>
<h3>ISBN: {{ $book->barCode}}</h3>

@if (count ($book->pisatel) == 1)
    <h3>Avtor: {{$book->pisatel[0]->firstName}} {{$book->pisatel[0]->lastName}}</h3>
    <a href="{{ route('avtor.prikazi',['authorId'=> $book->pisatel[0]->id ]) }}">{{$book->pisatel[0]->firstName}} {{$book->pisatel[0]->lastName}}</a>
    @else
    <h3>Avtori:</h3>
    <ul>
        @foreach($book->pisatel as $avtor)
            <li>
                <a href="{{ route('avtor.prikazi',['authorId'=> $avtor->id ]) }}">{{$avtor->firstName}} {{ $avtor->lastName}}</a>
            </li>
        @endforeach
    </ul>
@endif