@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Add new Book</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('books.index')}}" class="btn btn-primary fload-end">List of Books</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('books.store')}}" method="post">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="name">Author_ID:</label>
                        <select name="author_id" id="" class="form-control">
                            @foreach($authors as $aut)
                            <option value="{{$aut->id}}" @if($aut->id) selected @endif
                                {{$aut->author_id}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">title</label>
                        <input type="text" name="title" id="" class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection