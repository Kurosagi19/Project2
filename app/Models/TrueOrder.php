<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrueOrder extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'true_orders';
    public $fillable = ['date', 'time_start', 'time_end'];
}
