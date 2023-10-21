
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h3>List of Artworks</h3>

                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <a href="{{route('artworks.create')}}" class="btn  btn-primary">Add new artwork</a>
                        </div>
                    </div>
                    <div class="card-body">

                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif  
                    <table class="table table-bodered">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Art_type</th>
                        <th scope="col">Media_link</th>
                        <th scope="col">Cover_image</th>
                        <th scope="col">Edit </th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artworks as $art)
                        <tr>
                            <th>{{$art->id}}</th>
                            <td>{{$art->artist_name}}</td>
                            <td>{{$art->description}}</td>
                            <td>{{$art->art_type}}</td>
                            <td>{{$art->media_link}}</td>
                            <td>{{$art->cover_image}}</td>
                            <td>
                                <a href="{{route('artworks.edit', $art->id)}}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                            <form action="{{route('artworks.destroy', $art->id)}}" method="POST" class="deleteAuthor ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Delete  
                            </button>
                        </form>
                                
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const deleteForms = document.querySelectorAll('.deleteAuthor');
    deleteForms.forEach((form) => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const confirmDelete = confirm('Bạn có chắc chắn muốn xóa?');
            if (confirmDelete) {
                event.target.submit();
            }
        });
    });
</script>
    {{$artworks->links()}}

    
@endsection

