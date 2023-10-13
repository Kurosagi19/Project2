<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Field extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'fields';
    protected $fillable = ['name', 'image', 'description', 'type_id'];

    // Lấy khoá ngoại type_id
    public function types() {
        return $this->belongsTo(FieldType::class, 'type_id', 'id');
    }

    // Old function index
//    public function index() {
//        $fields = DB::table('fields')
//            ->join('field_types', 'fields.type_id', '=', 'field_types.id')
//            ->select([
//                'fields.*',
//                'field_types.type AS type'
//            ])
//            ->get();
//        return $fields;                                                                ;
//    }

// Old function store
//    public function store() {
//        DB::table('fields')
//            ->insert([
//               'name' => $this->name,
//                'image' => $this->image,
//                'description' => $this->description,
//                'type_id' => $this->type_id,
//            ]);
//    }
    public function edit() {
        $fields = DB::table('fields')
            ->where('id', $this->id)
            ->get();
        return $fields;
    }

    public function destroyField() {
        DB::table('fields')
            ->where('id', $this->id)
            ->delete();
    }
}
