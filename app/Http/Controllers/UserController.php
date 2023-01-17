<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(Request $request){
        $data = $request->all();
        // return $data;
        $create = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'country'=>$data['country'],
            'state'=>$data['state'],
            'zip'=>$data['zip'],
        ]);
        if($create){
            if(array_key_exists('product_Brand',$data) ){
                foreach($data['product_Brand'] as $key=>$value){
                    $createProdcut = Product::create([
                        'name'=>$data['product_name'][$key],
                        'quantity'=>$data['product_quantity'][$key],
                        'brand'=>$data['product_Brand'][$key],
                        'catagory'=>$data['product_catagory'][$key],
                        'user_id'=>$create->id,
                    ]);
                }
            }

            return "done";
        }else{
            return "not done";
        }
    }
}
