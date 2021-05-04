<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

        public function index(){
            try{
              $product= Product::index();
                return view('product', ['products'=>$product]);
            }catch(\Exception $exception){
                return $exception->getMessage();
            }
            
        }
        public function get_product($id){
            try{
                $product= Product::get_product($id);
                  return view('product', ['products'=>$product]);
              }catch(\Exception $exception){
                  return $exception->getMessage();
              }
    
        }
        public function delete_product($id){
            try{
    
                $product= Product::delete_product($id);
                  return view('product', ['products'=>$product]);
              }catch(\Exception $exception){
                  return $exception->getMessage();
              }
    
        }
        public function first_product($id){
            try{
                $product= Product::first_product($id);
                  return view('product', ['products'=>$product]);
              }catch(\Exception $exception){
                  return $exception->getMessage();
              }
    
        }
        public function product_sold($id){
            try{
                $product= Product::product_sold($id);
                return view('product', ['products'=>$product]);
              }catch(\Exception $exception){
                  return $exception->getMessage();
              }
    
        }

}
