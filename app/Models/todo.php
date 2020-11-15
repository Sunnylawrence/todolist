<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class todo extends Model
{
    use softDeletes;
    protected $fillable = [
       
        'todo_desc',
       
    ];
}
