<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Information;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home()
    {
        $information = Information::find(1);
        if($information->website_switch == false)
        {
            return view('front.404.index');
        }else{
            return view('front.home.index');
        }   
        return view('front.home.index');
    }
    public function services()
    {
        $services = Service::paginate(30);
        return view('front.service.index',compact('services'));
    }
    public function showServiceNext($title)
    {
        $service = Service::where('title',str_replace('_', ' ',$title))->first();
        return view('front.service.show',compact('service'));
    }
    public function showCategory(Request $request)
    {
        if($request->keyword)
        {
            $categories = Category::where('name', 'LIKE', '%'.$request->keyword.'%')->orderBy('name','ASC')->paginate(20);
        }
        else{
            $categories = Category::orderBy('display_order','ASC')->paginate(20);
        }
        return view('front.category.index',compact('categories'));
    }
    public function showCategoryDetails($name)
    {
        $category = Category::where('name',str_replace('_', ' ',$name))->first();
        $products = Product::where('category_id',$category->id)->orderBy('display_order','ASC')->paginate(20);
        return view('front.category.show',compact('category','products'));
    }
    public function showBrands(Request $request)
    {
        if($request->keyword)
        {
            $brands = Brand::where('name', 'LIKE', '%'.$request->keyword.'%')->orderBy('display_order','ASC')->paginate(20);
        }
        else{
            $brands = Brand::orderBy('display_order','ASC')->paginate(120);
        }
        return view('front.brand.index',compact('brands'));
    }
    public function showBrandDetails($name)
    {
        $brand = Brand::where('name',str_replace('_', ' ',$name))->first();
        $products = Product::where('brand_id',$brand->id)->orderBy('display_order','ASC')->paginate(20);
        return view('front.brand.show',compact('brand','products'));
    }
    public function showProducts(Request $request)
    {
        if($request->keyword)
        {
            $products = Product::where('name', 'LIKE', '%'.$request->keyword.'%')->orderBy('display_order','ASC')->paginate(20);
        }
        else{
            $products = Product::orderBy('display_order','ASC')->paginate(30);
        }
        return view('front.product.index',compact('products'));
    }
    public function showProductDetails($name)
    {
        $product = Product::where('name',str_replace('_', ' ',$name))->first();
        return view('front.product.show',compact('product'));
    }
}
