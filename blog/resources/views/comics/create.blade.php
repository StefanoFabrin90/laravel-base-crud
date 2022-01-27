@extends('layouts.main')

@section('content')
    <section class="container">
        <h3 class="text-center mb-5">Create new comics</h3>
    </section>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>

                

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumbnail" name="thumbnail">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select type="text" class="form-control" id="" name="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Create new comics</button>
                </div>
            </form>
        </div>
    </div>
@endsection