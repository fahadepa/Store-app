<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable =  [
        'Product_sold',
        'sale_price',
        'discount_price',
    ];

 public static function index(){
        $sale= self::all();
        return $sale;
    }
    public static function addsales($sale){
        $sales= new self;
        $sales->Product_sold = $sale['Product_sold'];
        $sales->sale_price = $sale['sale_price'];
        $sales->discount_price  = $sale['discount_price'];
        $status= $sales->save();
        return $status;
    }
    public static function lastrow(){
        $sales= self::index();
        return $sales->last();
    }
    public static function get_sale($id){
        $sale= self::Where('id',$id)->get();
        return $sale;
    }
    public static function delete_sale($id){
        $sale= self::where('id', $id)->delete();
        return $sale;
    }
    public static function first_sale($id){
        $sale= self::where('id', $id)->first();
        return $sale;
    }
    public static function get_savesale(){
        $sale= self::all();
        return $sale;
    }

}
