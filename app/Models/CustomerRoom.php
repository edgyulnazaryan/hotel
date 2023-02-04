<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'room_id',
    ];
}
