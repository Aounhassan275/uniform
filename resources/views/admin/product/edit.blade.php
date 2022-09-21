@extends('admin.layout.index')
@section('title')
Edit {{$product->name}} Product
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Update {{$product->name}} Product Information</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
        
            <div class="card-body">
                <form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" readonly placeholder="Product Name" value="{{@$product->name}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Price</label>
                            <input type="number" name="price" class="form-control" required placeholder="Product Price" value="{{@$product->price}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Stocks</label>
                            <input type="number" name="stock" class="form-control" value="{{@$product->stock}}"  required>
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Category</label>
                            <select data-placeholder="Enter 'as'" name="category_id" class="form-control select-minimum " data-fouc>
                                <option></option>
                                <optgroup label="Categories">
                                    @foreach(App\Models\Category::all() as $category)
                                    <option @if(@$product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>                      
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Brands</label>
                            <select data-placeholder="Enter 'as'" name="brand_id" class="form-control select-minimum " data-fouc>
                                <option></option>
                                <optgroup label="Brands">
                                    @foreach(App\Models\Brand::all() as $brand)
                                    <option  @if(@$product->brand_id == $brand->id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach         
                                </optgroup>
                            </select>                                    
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Display Order</label>
                            <input type="number" name="display_order" class="form-control" value="{{@$product->display_order}}"   required>
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" class="form-control summernote" required id="" rows="2">{{@$product->description}}</textarea>
                        </div>
                   </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View Product Images</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a data-toggle="modal" data-target="#add_image_model" href="#" class="btn btn-success">Add New Image</a>
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table  datatable-basic datatable-row-basic">
        <thead>
            <tr>
                <th>Sr#</th>
                <th>Product Image</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($product->images as $key => $image)
            <tr> 
                <td>{{$key+1}}</td>
                <td><img src="{{asset($image->image)}}" height="100" width="100" alt=""></td>
                <td class="text-center">
                    <form action="{{route('admin.product_images.destroy',$image->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn"><i class="icon-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="add_image_model" class="modal fade">
    <div class="modal-dialog">
        <form action="{{route('admin.product_images.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add Product Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Product Image</label>
                        <input class="form-control" type="hidden"  name="product_id" value="{{$product->id}}">
                        <input class="form-control" type="file" name="image">
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
@endsection