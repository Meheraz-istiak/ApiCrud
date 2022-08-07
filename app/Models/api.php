<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = "apis";
    protected $fillable = ['name','email','phone'];
}
