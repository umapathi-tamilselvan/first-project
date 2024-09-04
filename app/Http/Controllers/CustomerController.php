<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');

    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        \App\Models\Customer::create($data);

        return redirect('/customers');

    }

    public function show(Customer $customer)
    {

        return view('customer.show', compact('customer'));

    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $customer->update($data);

        return redirect('/customers');
    }
}
