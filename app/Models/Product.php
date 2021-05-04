<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function index(){
        $product= self::all();
        return $product;
    }
    public static function get_product($id){
        $product= self::Where('id',$id)->get();
        return $product;
    }
    public static function delete_product($id){
        $product= self::where('id', $id)->delete();
        return $product;
    }
    public static function first_product($id){
        $product= self::where('id', $id)->first();
        return $product;
    }
    public static function get_product_sold($id){
        $product= self::where('id', $id)->get();
        return $product;
    }


}

