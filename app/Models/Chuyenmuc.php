<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuyenmuc extends Model
{
    use HasFactory;
    protected $table = "chuyen_muc";
    public $timestamps= false;
}