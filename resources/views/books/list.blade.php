@extends('_layout.cork')

@section('content')

<div class="fq-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-md-0 order-1">
                    <div class="faq-header-content">
                        <h1 class="mb-4">Books</h1>
                        <div class="row">
                            <div class="col-lg-5 mx-auto">
                                <div class="autocomplete-btn">
                                    <input id="example1" class="form-control">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 mb-0">Search for popular and interesting books</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="faq container">

        <div class="faq-layouting layout-spacing">

            <div class="kb-widget-section">

                <div class="row justify-content-center">
                @foreach ($knige as $kniga)

                    <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                            <a href="{{ route('kniga.prikazi',['bookId'=> $kniga->id ]) }}">
                                <div class="card-icon mb-4">
                                <img src="{{ asset('assets/images/'.$kniga->slika->name)}}" height=65px>
                                </div>
                                <h5 class="card-title mb-0">{{$kniga->title}}</h5>
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