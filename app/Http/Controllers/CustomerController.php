<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Field;
use App\Models\FieldType;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Session;
use Illuminate\Support\Facades\Session;
//use MongoDB\Driver\Session;

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

    public function trueIndex() {
        return view('customers.index');
    }

    public function orders() {
        $fields = Field::all();
        $types = FieldType::all();
        $customers = Customer::all();
        $ajaxFields = Field::where('type_id', '1');
        return view('customers.orders', [
            'fields' => $fields,
            'types' => $types,
            'customers' => $customers,
            'ajaxFields' => $ajaxFields
        ]);
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
        $password = bcrypt($request->password);
        $array = [];
        $array = Arr::add($array, 'email', $request->email);
        $array = Arr::add($array, 'address', $request->address);
        $array = Arr::add($array, 'phonenumber', $request->phonenumber);
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'password', $password);
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
        $password = bcrypt($request->password);
        $array = [];
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'address', $request->address);
        $array = Arr::add($array, 'phonenumber', $request->phonenumber);
        $array = Arr::add($array, 'email', $request->email);
        $array = Arr::add($array, 'password', $password);
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

    public function cart() {
        return view('customers.cart');
    }

    public function addToCart(FieldType $types) {
        if (Session::exists('cart')) {
            $cart = Session::get('cart');
        } else {
            $cart = array();
            $cart= Arr::add($cart, $types -> id, ['type' => $types -> type, 'price' => $types -> price]);
        }
        Session::put(['cart' => $cart]);
        return Redirect::route('customers.cart');
}

    public function login() {
        return view('customers.login');
    }
    public function loginProcess(\Illuminate\Http\Request $request) {
        $account = $request->only('email', 'password');
        // Xác thực đăng nhập
        if (Auth::guard('customers')->attempt($account)) {
            // Cho login
            // Lấy thông tin customers
            $customers = Auth::guard('customers')->user();
            Auth::login($customers);
            session(['customers' => $customers]);
            return Redirect::route('customers.index');
        } else {
            // Quay về trang login
            return Redirect::route('customers.index');
        }
    }

    public function logout() {
        Auth::guard('customers')->logout();
        session()->forget('customers');
        return Redirect::route('customers.login');
    }
}
