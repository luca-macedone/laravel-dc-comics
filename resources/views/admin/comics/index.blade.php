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
                                                <form class="" action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger admin-btn" type="submit">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
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
