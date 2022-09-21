@extends('admin.layout.index')
@section('title')
Add Products to Store
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add Your Products</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
        
            <div class="card-body">
                <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                   @csrf
                   <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Product Price</label>
                            <input type="number" name="price" class="form-control" required placeholder="Product Price">
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Category</label>
                            <select data-placeholder="Enter 'as'" name="category_id" class="form-control select-minimum " data-fouc>
                                <option></option>
                                <optgroup label="Categories">
                                    @foreach(App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
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
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach         
                                </optgroup>
                            </select>                                    
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Product Stocks</label>
                            <input type="number" name="stock" class="form-control"  required>
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-9">
                            <label class="form-label">Product Images</label>
                            <input name="images[]" multiple type="file" class="form-input-styled" data-fouc>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="form-label">Product Display Order</label>
                            <input type="number" name="display_order" class="form-control"  required>
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label">Product Description</label>
                            <textarea name="description" class="form-control summernote" required id="" rows="2"></textarea>
                        </div>
                   </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create New Product <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection