<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'image','description','display_order'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveImage($value,'/uploaded_images/');
    }
}
