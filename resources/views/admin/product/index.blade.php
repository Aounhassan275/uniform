@extends('admin.layout.index')
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View Your Products</h5>
        <div class="header-elements">
            <div class="list-icons">
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
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Category</th>
                <th>Product Brand</th>
                {{-- <th>Product Orders</th> --}}
                <th>Total Stocks</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach (App\Models\Product::orderBy('display_order','ASC')->get() as $key => $product)
            <tr> 
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td>AED {{$product->price}}</td>
                <td>{{@$product->category->name}}</td>
                <td>{{@$product->brand->name}}</td>
                {{-- <td><a href="{{route('admin.order.index')}}">{{@$product->orders->count()}}</a></td> --}}
                <td>{{$product->stock}}</td>
                <td class="text-center">
                    <a href="{{route('admin.product.edit',$product->id)}}"><i class="icon-pencil7"></i></a>
                    <form action="{{route('admin.product.destroy',$product->id)}}" method="POST">
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
@endsection
@section('scripts')
@endsection