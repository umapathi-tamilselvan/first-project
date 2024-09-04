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

        $customer = new Customer;

        return view('customer.create', compact('customer'));

    }

    public function validatedData()
    {

        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

    }

    public function store()
    {

        $customer = Customer::create($this->validatedData());

        return redirect('/customers/'.$customer->id);

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

        $customer->update($this->validatedData());

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {

        $customer->delete();

        return redirect('/customers');

    }
}
