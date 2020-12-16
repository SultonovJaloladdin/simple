<?php

namespace App\Http\Controllers;
use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $activecustomers = Customers::where('active', 1)->get();
        $inactivecustomers = Customers::where('active', 0)->get();
        $customers = Customers::all();
        //dd($activeCustomers);
        return view('internals.customers', [
        'activecustomers' => $activecustomers,
        'inactivecustomers' => $inactivecustomers,
        ]); 
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required'
        ]);
        $customer = new Customers();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();
        return back();

       // dd(request('name'));
    }
}

