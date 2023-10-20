
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h3>List Of Authors</h3>

                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <a href="{{route('authors.create')}}" class="btn  btn-primary">Thêm mới</a>
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
                        <th scope="col">Họ tên</th>
                        <th scope="col">sửa </th>
                        <th scope="col">xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $aut)
                        <tr>
                            <th>{{$aut->id}}</th>
                           <td>{{$aut->name}}</td>
                            <td>
                                <a href="{{route('authors.edit' , $aut->id)}}" class="btn btn-info"> Sửa</a>
                            </td>
                            <td>
                            <form action="{{ route('authors.destroy', $aut->id) }}" method="POST" class="deleteAuthor ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                XOA   
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
    {{$authors->links()}}

    
@endsection
