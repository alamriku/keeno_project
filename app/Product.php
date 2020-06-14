<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    //this is eloquent mutator
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function getImageAttribute(){
        $array_images=explode(',',$this->images_url);
        foreach ($array_images as $r){
            if(!empty($r)){
                return $r;
            }
        }
    }
}
