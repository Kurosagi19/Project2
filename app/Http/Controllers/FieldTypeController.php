<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\FieldType;
use App\Http\Requests\StoreFieldTypeRequest;
use App\Http\Requests\UpdateFieldTypeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class FieldTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $field_types = FieldType::all();
        return view('types.index', ['field_types' => $field_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFieldTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldTypeRequest $request)
    {
        $array = [];
        $array = Arr::add($array, 'type', $request->type);
        $array = Arr::add($array, 'price', $request->price);
        FieldType::create($array);
        return Redirect::route('types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function show(FieldType $fieldType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldType $fieldType, Request $request)
    {
        $currtype = new FieldType();
        $currtype->id = $request->id;
        $currtypes = $currtype->edit();
        return view('types.edit', [
            'field_types' => $currtypes,
            'id' => $currtype->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldTypeRequest  $request
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldTypeRequest $request, FieldType $fieldType)
    {
        $update_type = new FieldType();
        $update_type->id = $request->id;
        $update_type->type = $request->type;
        $update_type->price = $request->price;
        $update_type->updateType();
        return Redirect::route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldType  $fieldType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldType $fieldType, Request $request)
    {
        $del_type = new FieldType();
        $del_type->id = $request->id;
        $del_type->destroyType();
        return Redirect::route('types.index');
    }
}
