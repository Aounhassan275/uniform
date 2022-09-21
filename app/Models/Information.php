<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'phone','logo','email','about','address','site_name','about_us_content',
        'facebook','twitter','instagram','pinterest','website_switch',
        'youtube'
    ];
    public function setLogoAttribute($value){
        $this->attributes['logo'] = ImageHelper::saveImage($value,'/uploaded_images/');
    }
    public static function siteName(){
        return (new static)::first()->site_name;
    }
    public static function facebook(){
        return (new static)::first()->facebook;
    }
    public static function twitter(){
        return (new static)::first()->twitter;
    }
    public static function instagram(){
        return (new static)::first()->instagram;
    }
    public static function pinterest(){
        return (new static)::first()->pinterest;
    }
    public static function youtube(){
        return (new static)::first()->youtube;
    }
    public static function phone(){
        return (new static)::first()->phone;
    }
    public static function email(){
        return (new static)::first()->email;
    }
    public static function aboutUs(){
        return (new static)::first()->about_us_content;
    }
    public static function address(){
        return (new static)::first()->address;
    }
}
