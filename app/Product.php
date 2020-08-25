<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;

use Illuminate\Support\Str;

class Product extends Model
{
    //


    public function path(){
    	return url('/product/'.$this->id.'-'.Str::slug($this->name, '-'));
    }

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }
}
