<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;
use App\Models\FieldType;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Chức năng hiển thị
    public function index()
    {
        $fields = Field::with('types')->simplePaginate(5);
        return view('fields.index', ['fields' => $fields]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Chức năng hiển thị form thêm
    public function create()
    {
        $field_types = FieldType::all();
        return view('fields.create', [
            'field_types' => $field_types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFieldRequest  $request
     * @return \Illuminate\Http\Response
     */

    // Chức năng thêm
    public function store(StoreFieldRequest $request)
    {
        $img_name = $request->file('image')->getClientOriginalName();
        if(!Storage::exists('/public/admin/img'.$img_name)) {
            Storage::putFileAs('public/admin/img', $request->file('image'), $img_name);
        }
        $array = [];
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'image', $img_name);
        $array = Arr::add($array, 'description', $request->description);
        $array = Arr::add($array, 'type_id', $request->type_id);
        Field::create($array);
        return Redirect::route('fields.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */

    // Chức năng hiện thị form sửa
    public function edit(Field $field, Request $request)
    {
        $types = FieldType::all();
        return view('fields.edit', [
            'fields' => $field,
            'field_types' => $types,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldRequest  $request
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */

    // Chức năng sửa
    public function update(UpdateFieldRequest $request, Field $field)
    {
        $img_name = $request->file('image')->getClientOriginalName();
        if(!Storage::exists('/public/admin/img'.$img_name)) {
            Storage::putFileAs('public/admin/img', $request->file('image'), $img_name);
        }
        $array = [];
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'image', $img_name);
        $array = Arr::add($array, 'description', $request->description);
        $array = Arr::add($array, 'type_id', $request->type_id);
        $field->update($array);
        return Redirect::route('fields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Field  $field
     * @return \Illuminate\Http\Response
     */

    // Chức năng xoá
    public function destroy(Field $field, Request $request)
    {
        $del_field = new Field();
        $del_field->id = $request->id;
        $del_field->destroyField();
        return Redirect::route('fields.index');
    }
}
