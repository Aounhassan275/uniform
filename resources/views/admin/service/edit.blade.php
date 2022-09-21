@extends('admin.layout.index')

@section('title')
{{$service->title}} Service
@endsection
@section('styles')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{$service->title}} Service</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>Enter Service Title</label>
                        <input type="text" name="title" placeholder="Enter Service Title" class="form-control" value="{{$service->title}}" required>
                        <input type="hidden" name="id" placeholder="Enter Service Title" class="form-control" value="{{$service->id}}" required>
                    </div>   
                    <div class="form-group">
                        <label>Enter Service Image</label>
                        <input name="image" multiple type="file" class="form-input-styled" data-fouc>
                    </div>         
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="description" required>{{$service->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Display Order</label>
                        <input type="number" name="display_order" placeholder="Enter Display Order" class="form-control" value="{{$service->display_order}}" required>
                    </div> 
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Updated 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection
@section('scripts')
@endsection