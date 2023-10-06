<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FieldType extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'field_types';
    protected $fillable = ['type', 'price'];


    // Old function index
//    public function index() {
//        $field_types = DB::table('field_types')
//            ->get();
//        return $field_types;
//    }

    // Function lưu trữ dữ liệu lên db
    public function store() {
        DB::table('field_types')
            ->insert([
                'type' => $this->type,
                'price' => $this->price,
                    ]);
    }

    // Lấy dữ liệu theo id
    public function edit() {
        // Query builder để select từ bảng field_types
        $field_types = DB::table('field_types')
            ->where('id', $this->id)
            ->get();
        return $field_types;
    }

    // Function update
    public function updateType() {
        DB::table('field_types')
            ->where('id', $this->id)
            ->update([
               'type' => $this->type,
               'price' => $this->price
            ]);
    }

    // Function destroy
    public function destroyType() {
        DB::table('field_types')
            ->where('id', $this->id)
            ->delete();
    }
}
