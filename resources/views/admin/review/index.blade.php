@extends('admin.layout.index')

@section('title')
    Add Review
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Review</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.review.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Review Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Review Name" required>
                        </div>
                          <div class="form-group col-md-12">
                            <label>Review Image</label>
                            <input name="image" type="file" class="form-control"  required>
                        </div>
                          <div class="form-group col-md-12">
                            <label>Review Message</label>
                            <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Review Position</label>
                            <input type="text" name="position" placeholder="Enter Position" class="form-control" required>
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
                <th>Review Image</th>
                <th>Review Name</th>
                <th>Review Message</th>
                <th>Review Position</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Review::all() as $key => $review)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($review->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$review->name}}</td>
                <td>{{$review->message}}</td>
                <td>{{$review->position}}</td>
                
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$review->name}}" message="{{$review->message}}"
                        position="{{$review->position}}" id="{{$review->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.review.destroy',$review->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Review Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                     <div class="form-group">
                        <label for="name">Review Image</label>
                        <input class="form-control" type="file" name="image" >
                    </div>
                     <div class="form-group">
                        <label for="name">Review Message</label>
                        <input class="form-control" type="text" id="message" name="message"  required>
                    </div>
                    <div class="form-group">
                        <label>Review Position</label>
                        <input type="text" name="position" id="position" placeholder="Enter Position" class="form-control" required>
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
            let position = $(this).attr('position');
            let message = $(this).attr('message');
            let name = $(this).attr('name');
            $('#name').val(name);
            $('#message').val(message);
            $('#position').val(position);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.review.update','')}}' +'/'+id);
        });
    });
</script>
@endsection