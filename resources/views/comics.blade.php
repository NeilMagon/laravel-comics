@extends('layouts.app')

@section('content')
    <section class="hero">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </section>
    <section class="ms-bg">
        <div class="container p-5">
            <div class="row py-4 mx-4">
                @foreach ($comics as $comic)
                    <div class="col-2 pt-5">
                        <div class="img-container">
                            <img src="{{ $comic ['thumb']}}" alt="{{ $comic ['title']}}">
                        </div>
                        <div class="text text-white pt-3">{{ $comic ['title']}}</div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-3">
                <button type="button" class="btn btn-primary">
                    LOAD MORE
                </button>
            </div>
        </div>
    </section>
@endsection

{{-- <div class="row">
    <div class="col d-flex align-items-center">
        <div class="image">
            <img src="{{ $comic ['thumb']}}" alt="{{ $comic ['title']}}">
        </div>
        <p class="text-white ps-2" href="#">{{ $comic ['title']}}</p>
    </div>
</div> --}}