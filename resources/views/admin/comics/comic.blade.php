@extends('layouts.app')

@section('page_title', 'Admin | Comic details')

@section('content')

    {{-- @include('partials.jumbotron') --}}

    <div class="">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    {{-- <h2 class="badge rounded-0 px-3 py-2 position-absolute">
                    Current Series
                </h2> --}}
                    <div class="card p-3 rounded-0 border-0 shadow text-dark">
                        <div class="card-body d-flex gap-3">
                            <div class="img-container">
                                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="series">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h4 class=" fw-normal"><strong>Title: </strong>{{ $comic['title'] }}</h4>
                                <p><strong>Description: </strong>{{ $comic['description'] }}</p>
                                <span><strong>Type: </strong>{{ $comic['type'] }}</span>
                                <span><strong>Price: </strong>{{ $comic['price'] }}</span>
                                <span><strong>Sale date: </strong>{{ $comic['sale_date'] }}</span>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="btn rounded-0 fw-semibold mb-5" id="learn-more-btn">
                    Load More
                </button> --}}
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        {{-- @include('partials.features_bar') --}}
    </div>
@endsection
