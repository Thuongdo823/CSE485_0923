@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Add new Author</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('authors.index')}}" class="btn btn-primary fload-end">List of Authors</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('authors.store')}}" method="post">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection