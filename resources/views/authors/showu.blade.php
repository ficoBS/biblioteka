<h3>Ime i Prezime: {{$avtor->firstName}} {{$avtor->lastName}}</h3>

@if (count ($avtor->napisanidela) == 1)
    <li><a href="{{ route('kniga.prikazi',['bookId'=> $avtor->napisanidela[0]->id ]) }}">{{$avtor->napisanidela[0]->title}}</a></li>
    @else

    <h3>Dela:</h3>
    <ul>
        @foreach($avtor->napisanidela as $delo)
            <li><a href="{{ route('kniga.prikazi',['bookId'=> $delo->id ]) }}">{{$delo->title}}</a></li>
        @endforeach
    </ul>
@endif