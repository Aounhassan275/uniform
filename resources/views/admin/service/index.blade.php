@extends('admin.layout.index')

@section('title')
    Manage Service 
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <div class="header-elements">
            <div class="list-icons ">
                <a href="{{route('admin.service.create')}}">
                    <button type="button" class="btn btn-info">New Service</button>
                </a>  
            </div>
        </div>
    </div> 

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Service Image</th>
                <th>Service Title</th>
                <th>Display Order</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Service::orderBy('display_order')->get()->all()  as $key => $service)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($service->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$service->title}}</td>
                <td>{{$service->display_order}}</td>
                <td>
                    <a href="{{route('admin.service.edit',$service->id)}}">
                        <button type="button" class="btn btn-dark btn-sm">Edit</button>
                    </a> 
                </td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('admin.service.destroy',$service->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">Delete</button>
                        </form>
                      
                      </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
