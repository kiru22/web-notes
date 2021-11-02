<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'text',
        'checked',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
