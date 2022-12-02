<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cellphone extends Model
{
    protected $fillable = [
        'mark',
        'model',
        'color',
    ];
}
