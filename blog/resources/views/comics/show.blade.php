@extends('layouts.main')

@section('content')
    <section class="container">
        <h3 class="text-center mb-5"> <strong>Details Comics:</strong> {{ $comic->title }}</h3>

        <div class="mb-5 text-center">
            <span class="badge bg-primary"> {{ $comic->type }}</span>
            Price: ${{ $comic->price }}
        </div>
        

        <div class=" row mb-5">
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{ $comic->thumbnail }}" class=""alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                <p>{!! $comic->description !!}</p>
            </div>
        </div>

        <div class="text-center">
            <a class="btn bg-primary" href="{{ route('comics.index') }}">Back to the store</a>
        </div>
    </section>

@endsection