<style>
table.customTable {
  width: 30%;
  background-color: #9C1781;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #08030A;
  border-style: solid;
  color: #8A8A8A;
}

table.customTable td, table.customTable th {
  border-width: 2px;
  border-color: #08030A;
  border-style: solid;
  padding: 5px;
}
</style>

@extends('_layout.cork')

@section('content')
<div class="fq-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-md-0 order-1">
                    <div class="faq-header-content">
                        <h1 class="mb-4">{{ $book->title}}</h1>
                        <img src="{{ asset('assets/images/'.$book->slika->name)}}" height=500px>
                    </div>
                    <p>{{$book->description}}</p>
                </div>
            </div>
        </div>
</div>

<table class="customTable">
  <tbody>
    @if (count ($book->pisatel) == 1)
    <tr>
      <th>Author</th>
      <td><a href="{{ route('avtor.prikazi',['authorId'=> $book->pisatel[0]->id ]) }}">{{$book->pisatel[0]->firstName}} {{$book->pisatel[0]->lastName}}</a></td>
    </tr>
    @else
    <tr>
        <th>Authors</th>
         <td>
        <ul style="list-style-type:none;">
            @foreach($book->pisatel as $avtor)
            <li>
                <a href="{{ route('avtor.prikazi',['authorId'=> $avtor->id ]) }}">{{$avtor->firstName}} {{ $avtor->lastName}}</a>
             </li>
            @endforeach
        </ul>
        </td>
    </tr>
    @endif

    <tr>
      <th>Categories</th>
      <td>
      <ul style="list-style-type:none;">
            @foreach($book->kategorija as $kategorie)
            <li>{{$kategorie->name}}</li>
            @endforeach
        </ul>
      </td>
    </tr>
    
    <tr>
      <th>Pages</th>
      <td>{{$book->pages}}</td>
    </tr>

    <tr>
      <th>ISBN</th>
      <td>{{$book->barCode}}</td>
    </tr>

    <tr>
      <th>status</th>
      <td>{{$book->status->name}}</td>
    </tr>
  </tbody>
</table>


@endsection

