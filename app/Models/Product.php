<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','price','category_id','brand_id','description','stock','display_order'
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
