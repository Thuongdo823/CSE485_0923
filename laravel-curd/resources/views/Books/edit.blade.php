@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Edit Book</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('books.index')}}" class="btn btn-primary fload-end">List of Books</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('books.update', $book->id)}}" method="post">
                    @csrf 
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Author_ID:</label>
                        <select name="author_id" class="form-control">
                                     <!-- trung với autor bên controller edit -->
                                @foreach($authors as $aut) 
                                <option value="{{ $aut->id }}" @if($aut->id == $book->author_id) selected
                                    @endif>{{ $aut->id }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">title</label>
                        <input type="text" name="title" id="" class="form-control" value="{{$book->title}}">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection