@extends('admin.layout.index')

@section('title')
    Add Brand
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Brand</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.brand.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Brand Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Brand Name" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Brand Image</label>
                            <input name="image"  type="file" class="form-input-styled" data-fouc>
                        </div>        
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control summernote" id="description"  name="description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Display Order</label>
                            <input type="number" name="display_order" placeholder="Enter Display Order" class="form-control" required>
                        </div>  
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Display Order</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Brand::orderBy('display_order','ASC')->get() as $key => $brand)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    @if($brand->image)
                        <img src="{{asset($brand->image)}}" style="width:100px;height:auto;">
                    @else 
                        <img src="{{asset('default.jpg')}}" style="width:100px;height:auto;">
                    @endif
                </td>
                <td>{{$brand->name}}</td>
                <td>{{$brand->display_order}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$brand->name}}" description="{{$brand->description}}"
                        display_order="{{$brand->display_order}}" id="{{$brand->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.brand.destroy',$brand->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Brand Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                     <div class="form-group">
                        <label for="name">Brand Image</label>
                        <input class="form-control" type="file" name="image" >
                    </div>
                     <div class="form-group">
                        <label for="name">Brand Description</label>
                        <textarea class="form-control"  id="edit_description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Brand Display Order</label>
                        <input type="text" name="display_order" id="display_order" placeholder="Enter Display Order" class="form-control" required>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let id = $(this).attr('id');
            let display_order = $(this).attr('display_order');
            let description = $(this).attr('description');
            let name = $(this).attr('name');
            $('#name').val(name);
            $('#edit_description').val(description);
            $('#display_order').val(display_order);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.brand.update','')}}' +'/'+id);
        });
    });
</script>
@endsection