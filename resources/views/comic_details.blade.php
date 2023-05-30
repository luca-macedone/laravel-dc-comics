@extends('layouts.app')

@section('page_title', 'Comic Details')

@section('content')

@include('partials.jumbotron')
    
<div class="bg-white">
    <div class="comic-thumb ms-bg-accent">
        <div class="container">
            <img src="{{ Vite::asset($comic['title']) }}" width="220" alt=""/>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-8 text-dark">
                <h1 class="text-uppercase fw-bold">{{ $comic['title'] }}</h1>
                <div class="row price-banner ms-bg-success my-3 mx-0">
                    <div class="col-12 col-lg-8 d-flex justify-content-between border-bottom p-3">
                        <div class="text-center">
                            <strong class="ms-text-success-light">U.S. Price:</strong>
                            <span class="text-light">{{ $comic['price'] }}</span>
                        </div>
                        <strong class="ms-text-success-light text-center">Available</strong>  
                    </div>
                    <div class="col-12 col-lg-4 text-center border-start border-bottom p-3 pointer">
                        <strong class="text-light">
                            Check availability 
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </strong>
                    </div>
                </div>
                <p>
                    {{ $comic['description'] }}
                </p>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column align-items-end">
                <h5 class="ms-text-secondary text-uppercase fw-bold m-0 pb-2">Advertisement</h5>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class="img-fluid" alt=""/>
            </div>
        </div>
    </div>
</div>
<div class="ms-bg-tertiary border-top">
    <div class="container">
        <div class="row pt-3 pb-5 g-5">
            <div class="col-12 col-lg-6">
                <h3 class="ms-text-dark">Talent</h3>
                <div class="row border-top border-bottom py-2">
                    <div class="col-3 ms-text-dark">Lorem, ipsum.</div>
                    <div class="col-9 text-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat ducimus eveniet nemo labore harum eligendi dicta reprehenderit velit fugiat. Molestiae natus, unde iste iusto blanditiis recusandae praesentium voluptatibus quidem cum.</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col-3 ms-text-dark">Lorem, ipsum.</div>
                    <div class="col-9 text-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat ducimus eveniet nemo labore harum eligendi dicta reprehenderit velit fugiat. </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="ms-text-dark">Specs</h3>
                <div class="row border-top border-bottom py-2">
                    <div class="col-3 ms-text-dark">Series:</div>
                    {{-- <div class="col-9 text-info">ACTION GAMES</div> --}}
                    <div class="col-9 text-info">{{ $comic['series'] }}</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col-3 ms-text-dark">U.S. Price:</div>
                    <div class="col-9 text-dark">{{ $comic['price'] }}</div>
                </div>
                <div class="row border-bottom py-2">
                    <div class="col-3 ms-text-dark">On sale date:</div>
                    <div class="col-9 text-dark">{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border-top mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 d-flex justify-content-between gap-3 p-3 border-start border-end">
                    <strong class="text-uppercase ms-text-secondary">Digital comics</strong>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" height="40" class="actions-image" />
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-between gap-3 p-3 border-end">
                    <strong class="text-uppercase ms-text-secondary">Shop DC</strong>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" height="40" class="actions-image" />
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-between gap-3 p-3 border-end">
                    <strong class="text-uppercase ms-text-secondary">Subscriptions</strong>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" height="40" class="actions-image" />
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-between gap-3 p-3 border-end">
                    <strong class="text-uppercase ms-text-secondary">Comic shop locator</strong>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" height="40" class="actions-image" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection