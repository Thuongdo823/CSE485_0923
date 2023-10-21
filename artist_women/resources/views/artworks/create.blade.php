@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Add new Artwork</h3>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-6">
                        <a href="{{route('artworks.index')}}" class="btn btn-primary fload-end">List of Artworks</a>
                    </div>
                </div>
            </div>

            <div class="card-body mt-">
                <form action="{{route('artworks.store')}}" method="post">
                    @csrf 
                    <div class="form-group mb-3">
                        <label for="name">Artist_name</label>
                        <input type="text" name="artist_name" id="" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Description</label>
                        <input type="text" name="description" id="" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Art_type</label>
                        <select name="art_type" id="" class="form-control">
                            <option selected>Choose</option>
                            <option value="hoi hoa">hoi hoa</option>
                            <option value="am nhac">am nhac</option>
                            <option value="van hoc">van hoc</option>
                                </select>
                    <div class="form-group mb-3">
                        <label for="name">Media_link</label>
                        <input type="text" name="media_link" id="" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Cover_image</label>
                        <input type="text" name="cover_image" id="" class="form-control" >
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection