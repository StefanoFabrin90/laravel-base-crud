@extends('layouts.main')

@section('content')
    <section class="container">
        <h3 class="text-center mb-5">Create new comics</h3>
    </section>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('comic.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title">Title</label>
                </div>
            </form>

        </div>
    </div>
@endsection