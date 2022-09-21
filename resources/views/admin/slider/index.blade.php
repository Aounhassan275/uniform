@extends('admin.layout.index')

@section('title')
    Add Slider
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/form_tags_input.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Slider</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Slider Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Enter Slider Title" required>
                        </div>
                          <div class="form-group col-md-12">
                            <label>Slider Image</label>
                            <input name="image" type="file" class="form-control"  required>
                        </div>
                          <div class="form-group col-md-12">
                            <label>Slider Description</label>
                            <textarea name="description" id="" cols="30" rows="2" class="form-control summernote"></textarea>       
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
                <th>Slider Image</th>
                <th>Slider Name</th>
                <th>Slider Description</th>
                <th>Display Order</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Slider::orderBy('display_order')->get()->all() as $key => $slider)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($slider->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$slider->title}}</td>
                <td>{{$slider->description}}</td>
                <td>{{$slider->display_order}}</td>
                
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" title="{{$slider->title}}" description="{{$slider->description}}"
                    display_order="{{$slider->display_order}}" id="{{$slider->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.slider.destroy',$slider->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Slider Name</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Enter Title" required>
                    </div>
                     <div class="form-group">
                        <label for="name">Slider Image</label>
                        <input class="form-control" type="file" name="image" >
                    </div>
                     <div class="form-group">
                        <label for="name">Slider Description</label>
                        <input class="form-control" type="text" id="description" name="description"  required>
                    </div>
                    <div class="form-group">
                        <label>Display Order</label>
                        <input type="number" name="display_order" id="display_order" placeholder="Enter Display Order" class="form-control" required>
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
            let title = $(this).attr('title');
            $('#title').val(title);
            $('#description').val(description);
            $('#display_order').val(display_order);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.slider.update','')}}' +'/'+id);
        });
    });
</script>
@endsection