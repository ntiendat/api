<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    use HasFactory;
    protected $table = "bai_viet";
    public $timestamps= false;
}