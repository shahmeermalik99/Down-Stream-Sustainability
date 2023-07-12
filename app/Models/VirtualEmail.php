<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualEmail extends Model
{
    use HasFactory;
    protected $table='virtual_emails';
    
    protected $fillable = [
        'email',
        'status',
        ];
}
