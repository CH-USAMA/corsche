<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;
    protected $fillable = [
        'election_name',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'election_position',
        'status',
        'updated_at',
        'created_at',
    ];
}
