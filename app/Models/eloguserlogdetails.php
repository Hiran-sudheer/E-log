<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eloguserlogdetails extends Model
{
    use HasFactory;


    protected $table = 'e-log-user-log-details';
    public $timestamps = false;



    protected $fillable = [
        'user_id',
        'login_time',
        'logout_time',
        'id',
        'total_hours',
        'exception'
    ];




}
