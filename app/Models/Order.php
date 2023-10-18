<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orders';

    public function admins() {
        return $this->belongsTo(Admin::class, 'ad_id', 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'cust_id', 'id');
    }
}
