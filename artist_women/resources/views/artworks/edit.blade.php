@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Edit Artwork</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('artworks.index')}}" class="btn btn-primary fload-end">List of Artworks</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('artworks.update', $artwork->id)}}" method="post">
                    @csrf 
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Art_name:</label>
                        <input type="text" name="artist_name" id="" class="form-control" value="{{$artwork->artist_name}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Description:</label>
                        <input type="text" name="descripton" id="" class="form-control" value="{{$artwork->description}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Art_type:</label>
                        <select name="art_type" id=""selected value="{{$artwork->art_type}}" class="form-control">
                            
                            
                            <option value="hoi hoa">hoi hoa</option>
                            <option value="am nhac">am nhac</option>
                            <option value="van hoc">van hoc</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Media link:</label>
                        <input type="text" name="media_link" id="" class="form-control" value="{{$artwork->media_link}}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Cover image:</label>
                        <input type="text" name="cover_image" id="" class="form-control" value="{{$artwork->cover_image}}" required>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection