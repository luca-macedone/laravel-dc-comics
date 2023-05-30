@extends('layouts.app')

@section('page_title', 'Admin | Comics')

@section('content')

    {{-- @include('partials.jumbotron') --}}

    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-column align-items-center position-relative">
                    {{-- <h2 class="badge rounded-0 px-3 py-2 position-absolute">
                    Current Series
                </h2> --}}
                    @if (session('message'))
                    <div class="alert alert-primary alert-dismissible fade show w-100 p-3 border" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong class="text-uppercase">{{ session('message') }}</strong>
                    </div>
                    @endif
                    
                    
                    <div class="w-100 d-flex justify-content-between align-items-center pb-3">    
                        <h1>Comics</h1>
                        <a class="btn btn-info fw-bold fs-5 text-uppercase" href="{{ route('admin.comics.create') }}">
                            Add
                        </a>
                    </div>
                    <div class="table-responsive w-100 mb-5">
                        <table class="table table-black text-white">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Type</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($comics as $comic)
                                    <tr class="">
                                        <td scope="row">{{ $comic['id'] }}</td>
                                        <td>{{ $comic['title'] }}</td>
                                        <td>
                                            <div class="h-100 overflow-hidden">
                                                <img class="" height="100" src="{{ $comic['thumb'] }}" alt="series">
                                            </div>
                                        </td>
                                        <td>{{ $comic['price'] }}</td>
                                        <td class="text-capitalize">{{ $comic['type'] }}</td>
                                        <td class="">
                                            <div class="d-flex justify-content-center align-items-center gap-3">
                                                <a class="btn btn-info d-lg-inline-flex admin-btn" href="{{route('admin.comics.show', $comic->id)}}">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a class="btn btn-warning d-lg-inline-flex admin-btn" href="{{route('admin.comics.edit', $comic->id)}}">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                <!-- Modal trigger button -->
                                                <button type="button" class="btn btn-danger admin-btn" data-bs-toggle="modal" data-bs-target="{{'#modalId' . $comic->id}}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                
                                                <!-- Modal Body -->
                                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                                <div class="modal fade" id="{{'modalId'.$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="{{'modalTitleId' . $comic->id}}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-danger" id="{{'modalTitleId' . $comic->id}}">Warning</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body ms-text-dark">
                                                                Are you sure to delete this item?
                                                            </div>
                                                            <div class="modal-footer">
                                                                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                                                <form class="" action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit">
                                                                        Permanently delete
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <span>Nothing here yet!</span>
                                @endforelse
                            </tbody>
                        </table>
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
