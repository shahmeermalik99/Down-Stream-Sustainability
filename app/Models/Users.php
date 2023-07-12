<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    
    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'dropdown_menu',
        'activity',
        'dinner',
        'day_session',
        'qr_link',
        'status',
        'virtual_user_status',
        'sent_email_time',
        'email_status',
        'password',
        ];
}