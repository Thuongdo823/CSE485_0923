@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Add new Flower</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('flowers.index')}}" class="btn btn-primary fload-end">List of Flowers</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('flowers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" class="form-control" required placeholder="Flower Name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="" class="form-control" placeholder="Description" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="name">Image Url</label>
                        <input type="file" name="image_url" id="image" class="form-control" accept="image/*" required >
                        
                       
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
