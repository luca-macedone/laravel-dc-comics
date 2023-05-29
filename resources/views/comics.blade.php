@extends('layouts.app')

@section('page_title', 'DC Comics')

@section('content')

@include('partials.jumbotron')

<div class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center position-relative">
                <h2 class="badge rounded-0 px-3 py-2 position-absolute">
                    Current Series
                </h2>
                <div class="row g-4">
                    @foreach($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-2">
                        <a href="#" class="comic-link">
                            <div class="img-container">
                                <img class="img-fluid" src="{{$comic['thumb']}}" alt="series">
                            </div>
                            <h4 class="comic-name fw-normal">{{$comic['title']}}</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
                <button class="btn rounded-0 fw-semibold mb-5" id="learn-more-btn">
                    Load More
                </button>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    @include('partials.features_bar')
</div>
@endsection
