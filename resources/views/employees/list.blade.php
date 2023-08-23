@extends('_layout.cork')

@section('content')


<h1 class="mb-4">Vraboteni</h1>


        <div class="faq container">

        <div class="faq-layouting layout-spacing">

            <div class="kb-widget-section">

                <div class="row justify-content-center">
                @foreach ($vraboteni as $vraboten)

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                            <a href="{{ route('kniga.prikazi',['bookId'=> $kniga->id ]) }}">
                                <div class="card-icon mb-4">
                                <img src="{{ asset('assets/images/'.$kniga->slika->name)}}" height=65px>
                                </div>
                                <h5 class="card-title mb-0">{{$vraboten->name}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        </div>

@endsection