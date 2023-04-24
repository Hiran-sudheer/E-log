<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payloadModel extends Model
{
    use HasFactory;

    protected $table = 'payload';
    protected $fillable = [
        'payload'
    ];
  
}
