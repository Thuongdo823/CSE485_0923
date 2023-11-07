@extends('layout.app')
@section('content')
<div class="container-fluid">
        <div>
            <div class="card">
                <div class="card-header">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <h3>List of Flowers</h3>

                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <a href="{{route('flowers.create')}}" class="btn  btn-primary">Add new flower</a>
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
                        <th scope="col">Flower Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Region</th>
                        <th scope="col">Image Url</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Edit </th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($flowers as $flower)
                        <tr>
                            <th>{{$flower->id}}</th>
                            <td>{{$flower->name}}</td>
                            <td>{{$flower->description}}</td>
                            <td>
                                @if($flower->regions->isNotEmpty())
                                    <ul class="p-0 m-0" style="list-style-type: square;">
                                        @foreach($flower->regions as $region_name)
                                        <li>
                                            {{$region_name->region_name}}
                                        </li>
                                        @endforeach
                                    </ul>
                                @else 
                                    <h6>None region</h6>
                                @endif
                            </td>
                            <td><img src="<?= $flower->image_url ?>" alt="" style="width:70px; height:70px;" ></td>
                            <td><a href="{{route('flowers.show', $flower->id)}}" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            <td>
                                <a href="{{route('flowers.edit', $flower->id)}}" class=" btn btn-info"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{route('flowers.destroy',$flower->id)}}" method="POST" class="deleteFlower">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>  
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
        const deleteForms = document.querySelectorAll('.deleteFlower');
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
    {{$flowers->links()}}
@endsection
