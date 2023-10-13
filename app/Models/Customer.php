<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customers';
    protected $fillable = ['email', 'address', 'phonenumber', 'name', 'password'];

    use Authenticatable;
}
