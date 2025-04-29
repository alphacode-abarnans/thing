<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;
    protected $table = 'things';
    protected $fillable = ['name', 'expiry_date'];
}
