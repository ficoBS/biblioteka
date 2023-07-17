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
                        <h1 class="mb-4">{{$avtor->firstName}} {{$avtor->lastName}}</h1>
                        <img src="{{ asset('assets/images/'.$avtor->slika->name)}}" height=500px>
                    </div>
                    <p>{{$avtor->description}}</p>
                </div>
            </div>
        </div>
</div>


<table class="customTable">
  <tbody>
    @if (count ($avtor->napisanidela) == 1)
    <tr>
      <th>Written book</th>
      <td><a href="{{ route('kniga.prikazi',['bookId'=> $avtor->napisanidela[0]->id ]) }}">{{$avtor->napisanidela[0]->title}}</a></td>
    </tr>
    @else
    <tr>
        <th>Writtem books</th>
         <td>
        <ul style="list-style-type:none;">
            @foreach($avtor->napisanidela as $delo)
                <li><a href="{{ route('kniga.prikazi',['bookId'=> $delo->id ]) }}">{{$delo->title}}</a></li>
            @endforeach
        </ul>
        </td>
    </tr>
    @endif

    <tr>
      <th>BirthDate</th>
      <td>{{$avtor->birthDate}}</td>
    </tr>

    <tr>
      <th>Nationality</th>
      <td>{{$avtor->Nationality}}</td>
    </tr>
  </tbody>
</table>


@endsection