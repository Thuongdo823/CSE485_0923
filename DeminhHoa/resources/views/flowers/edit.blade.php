@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Edit Flower</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('flowers.index')}}" class="btn btn-primary fload-end">List of Flowers</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('flowers.update', $flower->id)}}" method="post">
                    @csrf 
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="" class="form-control" value="{{$flower->name}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Description:</label>
                        <input type="text" name="description" id="" class="form-control" value="{{$flower->description}}" required>
                    </div>
                    
                    
                    <div class="form-group mb-3">
                        <label for="name">Image Url</label>
                        <img src="{{$flower->image_url}}" alt="">
                        <input type="file" class="form-control" name="image_url" accept="image/*">
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection