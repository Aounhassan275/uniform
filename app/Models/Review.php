<?php

namespace App\Models;
use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'position','message','image'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveImage($value,'/uploaded_images/');
    }
}
