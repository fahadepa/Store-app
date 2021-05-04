<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index(){
        try{
          $customer= Customer::index();
            return view('customer', ['customers'=>$customer]);
        }catch(\Exception $exception){
            return $exception->getMessage();
        }
        
    }
    //To display form page
    public function addCustomerForm(){
        try{
            return view('addcustomer');
        }catch(\Exception $exception){}
    } 

    //Only to save data
    public function addcustomer(Request $request){
        try{
            $data = $request->all();
           // return $request;
          $customer= Customer::addcustomer($data);
          return $customer;  
          //return view('customer', ['customers'=>$customer]);
        }catch(\Exception $exception){
            return $exception->getMessage();
        }
        
    }
    public function get_customer($id){
        try{
            $customer= Customer::get_customer($id);
              return view('customer', ['customers'=>$customer]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
    public function delete_customer($id){
        try{

            $customer= Customer::delete_customer($id);
              return $customer;
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
    public function first_customer($id){
        try{
            $customer= Customer::first_customer($id);
              return view('onerecord', ['customer'=>$customer]);
          }catch(\Exception $exception){
              return $exception->getMessage();
          }

    }
}
