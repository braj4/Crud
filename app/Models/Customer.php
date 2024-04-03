<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';           // To make connection between the customer table and the database
    protected $primaryKey='customer_id';
    protected $fillable = ['customer_id','name','email','address','phone'];

}
