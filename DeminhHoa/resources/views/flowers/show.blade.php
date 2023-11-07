
@extends('layout.app')
@section('content')
    <div class="container vh-100 mt-5">
        <form action="">
            <div class="row d-flex">
                <div class="col-md-12 d-flex justify-content-center">
 
                    <img style="width: 500px; max-height:500px;" src="{{$flower->image_url}}" alt="flower image_url">
                    
                    
                    
                    <div class="bg-light rounded shadow w-50 ">
                        <div class="p-4 border-bottom">
                            <h3 class="text-center">Infor flower</h3>
                        </div>
                        <div class="p-4">
                            <div class="form-group">
                                <h6 class="form-label">ID</h6>
                                <p>{{$flower->id}}</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="form-group">
                                <h6 class="form-label">Name</h6>
                                <p>{{$flower->name}}</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="form-group">
                                <h6 class="form-label">Description</h6>
                                <p>{{$flower->description}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2"><a class="btn btn-warning " href="{{route('flowers.index')}}">Back</a></div>
                        </div>
                    
                </div>
               
                    
                
            </div>
        </form>
    
           
        
        
    </div>
@endsection
