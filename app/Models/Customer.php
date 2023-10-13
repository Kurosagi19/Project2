<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customers';
    protected $fillable = ['email', 'address', 'phonenumber', 'name', 'password'];

    use Authenticatable;

    public function edit() {
        $customers = DB::table('customers')
            ->where('id', $this->id)
            ->get();
        return $customers;
    }

    public function destroyCustomer() {
        DB::table('customers')
            ->where('id', $this->id)
            ->delete();
    }
}
