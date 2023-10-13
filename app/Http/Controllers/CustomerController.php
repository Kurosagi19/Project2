<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(5);
        return view('customers.custIndex', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $array = [];
        $array = Arr::add($array, 'email', $request->email);
        $array = Arr::add($array, 'address', $request->address);
        $array = Arr::add($array, 'phonenumber', $request->phonenumber);
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'password', $request->password);
        Customer::create($array);
        return Redirect::route('customers.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customers)
    {
        return view('customers.edit', [
            'customers' => $customers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customers)
    {
        $array = [];
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'address', $request->address);
        $array = Arr::add($array, 'phonenumber', $request->phonenumber);
        $array = Arr::add($array, 'email', $request->email);
        $array = Arr::add($array, 'password', $request->password);
        $customers->update($array);
        return Redirect::route('customers.custIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customers, \Illuminate\Http\Request $request)
    {
        $del_cust = new Customer();
        $del_cust->id = $request->id;
        $del_cust->destroyCustomer();
        return Redirect::route('customers.custIndex');
    }

    public function login() {
        return view('customers.login');
    }
    public function loginProcess(\Illuminate\Http\Request $request) {
        $account = $request->only(['email', 'password']);
        // Xác thực đăng nhập
        if (Auth::guard('customers')->attempt($account)) {
            // Cho login
            // Lấy thông tin customers
            $customers = Auth::guard('customers')->user();
            Auth::guard('customers')->login($customers);
            session(['customers' => $customers]);
            return Redirect::route('customers.index');
        } else {
            // Quay về trang login
            return Redirect::back();
        }
    }
}
