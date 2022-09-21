@extends('admin.layout.index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-xl-4">
        <a href="{{route('admin.category.index')}}">
            <div class="card card-body bg-violet-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Category::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Categories</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-collaboration icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-4">
        <a href="{{route('admin.brand.index')}}">
            <div class="card card-body bg-orange-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-lan icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{App\Models\Brand::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Brand</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-4">
        <a href="{{route('admin.product.index')}}">
            <div class="card card-body bg-indigo-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-cart2 icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{App\Models\Product::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Product</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- <div class="col-sm-6 col-xl-3">
        <div class="card card-body bg-blue-400 has-bg-image">
            <div class="media">
                <div class="media-body">
                    <h3 class="mb-0">{{Auth::user()->refer_by_name(Auth::user()->referral)}}</h3>
                    <span class="text-uppercase font-size-xs">Your Child</span>
                </div>

                <div class="ml-3 align-self-center">
                    <i class="icon-users2 icon-3x opacity-75"></i>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<div class="row">
    
    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.service.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">

                    <div class="mr-3 align-self-center">
                        <i class="icon-unlink2 icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Service::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Services</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.slider.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-stack-picture icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Slider::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Slider</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4 col-xl-4">
        <a href="{{route('admin.messages.index')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body align-self-center ">
                    <h3 class="mb-0">{{App\Models\Message::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Messages </span>
                    </div>
                    <div class="ml-3 text-right">
                        <i class="icon-bubbles4 icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection