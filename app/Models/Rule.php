<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
     protected $fillable = [
        'date',
        'msg',
        'classification',
        'priority',
        'protocol',
        'source_ip',
        'destination_ip',
        'source_port',
        'destination_port',
        'filename',
        'u_id'
    ];
}
