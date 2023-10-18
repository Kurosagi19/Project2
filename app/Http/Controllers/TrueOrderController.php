<?php

namespace App\Http\Controllers;

use App\Models\TrueOrder;
use App\Http\Requests\StoreTrueOrderRequest;
use App\Http\Requests\UpdateTrueOrderRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class TrueOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = TrueOrder::all();
        return view('orders.index', [
            'true_orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrueOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrueOrderRequest $request)
    {
        $array = [];
        $array = Arr::add($array, 'date', $request->date);
        $array = Arr::add($array, 'time_start', $request->time_start);
        $array = Arr::add($array, 'time_end', $request->time_end);
        TrueOrder::create($array);
        return Redirect::route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrueOrder  $trueOrder
     * @return \Illuminate\Http\Response
     */
    public function show(TrueOrder $trueOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrueOrder  $trueOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(TrueOrder $trueOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrueOrderRequest  $request
     * @param  \App\Models\TrueOrder  $trueOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrueOrderRequest $request, TrueOrder $trueOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrueOrder  $trueOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrueOrder $trueOrder)
    {
        //
    }
}
