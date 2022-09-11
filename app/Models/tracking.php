<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_sent',
        'arrival_date',
        'progress',
        'c_id',
    ];

    //Table Name
    protected $table = 'tracking';

    // Primary key
    public $primaryKey = 'id';

    public $timestamps = false;
}
