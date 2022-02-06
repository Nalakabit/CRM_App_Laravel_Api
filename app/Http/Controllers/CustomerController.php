<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function customers(){
        $customers = Customer::all();
        return response()->json(
            [
                'customers' => $customers,
                'message' => 'Customers',
                'code' => 200
            ]
        );
    }

    public function getCustomer($id) {
        $customer = Customer::find($id);
        return response()->json($customer);

    }

    public function saveCustomer(Request $request){
        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->contact_no = $request->contact_no;
        $customer->save();
        return response()->json([
            'message' => 'Customer Created Successfully',
            'code' => 200
        ]);

    }

    public function deleteCustomer($id){
        $customer = Customer::find($id);
        if($customer) {
            $customer->delete();
            return response()->json([
                'message' => 'Customer deleted sucessfully',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => "Customer with id:$id does not exit"
                
            ]);

        }
    }

    public function updateCustomer($id, Request $request){
        $customer = Customer::where('id', $id)->first();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->contact_no = $request->contact_no;
        $customer->save();
        return response()->json([
            'message' => 'Customer Updated Successfully',
            'code' => 200
        ]);

    }
}
