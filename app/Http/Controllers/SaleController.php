<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
class SaleController extends Controller
{
    public function index(){
        try{
          $sale= Sale::index();
            return view('sale', ['sales'=>$sale]);
        }catch(\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function saleview(){
        try{
            $sale= Sale::lastrow();
            return view('addsales', ['sales'=>$sale]);
        }catch(\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function salesrequest(Request $request)
    {
        try{
            $salesdata= $request->all();
            $sale=Sale::addsales($salesdata);
            if($sale){
                return "data has been saved succesful";
            }

        }
        catch(\Exception $exception){
            return $exception->getMessage();
        }
        
    }

    public function get_savesale(){
        try{
            $sale= Sale::get_savesale();
              return view('Addsales', ['sale'=>$sale]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }

    public function get_sale($id){
        try{
            $sale= Sale::get_sale($id);
              return view('sale', ['sales'=>$sale]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
    public function delete_sale($id){
        try{

            $sale= Sale::delete_sale($id);
              return view('sale', ['sales'=>$sale]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
    public function first_sale($id){
        try{
            $sale= Sale::first_sale($id);
              return view('sale', ['sales'=>$sale]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
}
