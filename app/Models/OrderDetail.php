<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'order_details';

    public function orders() {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function fields() {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }
    public function times() {
        return $this->belongsTo(Time::class, 'time_id', 'id');
    }
}
