<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlids extends Model
{
    use HasFactory;
        protected $fillable = [
      
        
        'source_ip',
        'destination_ip',
        'source_port',
        'destination_port',
        'Attck', 
        'protocol',
    ];
}
