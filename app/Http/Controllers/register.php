<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class register extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function register(Request $request){
        $request->validate(                        // This will help in validating the input files
            [
                'name'=>'required',
                'email'=>'required',
                'address'=>'required',
                'phone'=>'required'
            ]
        );

            $customer=new Customer;
            $customer->name=$request['name'];
            $customer->email=$request['email'];
            $customer->address=$request['address'];
            $customer->phone=$request['phone'];
            $customer->save();

            
        // echo "<pre>";
        // print_r($request->all());          // by using the -> operator you can simpily call the method in laravel and by using {} you can call a variable in laravel

        return redirect('customer/view');        // This will send to the route which is enclosed in between the ''
    }
    public function view(){
        
        $customers=Customer::paginate(5);          // This will show in array all the database value in array
        // echo "hello";
        // die;
        $data=compact('customers');             // This will take it as object
        return view('customer-view')->with($data);
    }
    public function delete($id){
        // echo $id;
        // $customer=Customer::find($id);
        // echo "<pre>";
        // print_r($customer->toArray());
        $customer=Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function update($id){
        $customer=Customer::find($id);
        
        if(is_null($customer)){
            return redirect('customer/view');
        }else{
            // $data=compact('customer');
            return view('updataPage', compact('customer'));
            // return redirect('/register');
        }
    }
    public function edit($id,Request $request){

            $customer=Customer::find($id);
            $customer->name=$request['name'];
            $customer->email=$request['email'];
            $customer->address=$request['address'];
            $customer->phone=$request['phone'];
            $customer->save();

            return redirect('customer/view');
    }
}
