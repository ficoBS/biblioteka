@extends('_layout.cork')

@section('content')
<form>
<table>
    <tr>
        <td>
            <div class="faq container">

            <div class="faq-layouting layout-spacing">

                <div class="kb-widget-section">

                    <div class="row justify-content-center">
                    @foreach ($r as $rentanje)

                                    <div class="card-icon mb-4">
                                    <a href="{{ route('kniga.prikazi',['bookId'=> $rentanje->kniga->id ]) }}">
                                    <img src="{{ asset('assets/images/'.$rentanje->kniga->slika->name)}}" height=65px>
                                </a>
                                    </div>
                                    <h5 class="card-title mb-0">{{$rentanje->kniga->title}}</h5>
                        <input type='checkbox'>
                    @endforeach
                    </div>
                </div>
            </div>
            </div>
        </td>

        <td>

        </td>
    </tr>

</table>
</form>

@endsection