<?php

namespace App\Http\Controllers;
use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = Customers::all();
        //dd($customers);
        return view('internals.customers', [
        'customers' => $customers,
        ]); 
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required'
        ]);
        $customer = new Customers();
        $customer->name = request('name');
        $customer->save();
        return back();
       // dd(request('name'));
    }
}

