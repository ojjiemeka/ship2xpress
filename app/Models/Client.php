<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'r_fname',
        'r_lname',
        'r_email',
        'r_phone',
        'r_address',
        'r_city',
        'r_state',
        'r_country',
        'r_zip',
        's_fname',
        's_lname',
        's_email',
        's_phone',
        's_address',
        's_city',
        's_state',
        's_country',
        's_zip',
        'tracking',
        'otp'
    ];

    //Table Name
    protected $table = 'client';

    // Primary key
    public $primaryKey = 'id';

    public $timestamps = false;
}
