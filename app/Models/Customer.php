<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable =  [
        'First_name',
        'CNIC',
        'product_purchase',
        'employee_id',
        'Address',
    ];
    public static function index(){
        $customer= self::all();
        return $customer;
    }
    public static function addcustomer($customer){
        $customer1= new self;
        $customer1->First_name= $customer['First_name'];
        $customer1->CNIC= $customer['CNIC'];
        $customer1->product_purchase= $customer['product_purchase'];
        $customer1->employee_id= $customer['employee_id'];
        $customer1->Address= $customer['Address'];
        $status = $customer1->save();
        return $status;
    }
    public static function get_customer($id){
        $customer= self::Where('id',$id);
        return $customer;
    }
    public static function delete_customer($id){
        $customer= self::where('employee_id', $id)->delete();
        return $customer;
    }
    public static function first_customer($id){
        $customer= self::where('id', $id)->first();
        return $customer;
    }
}
