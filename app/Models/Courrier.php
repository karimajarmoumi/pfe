<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    protected $fillable = [
        'from', 'to', 'file','priority','date'


    ];

}
