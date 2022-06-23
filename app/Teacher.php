<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'skype',
        'teaching_profession',
        'birth_date',
        'phone',
        'another_phone',
        'interface_language',
        'time_zone',
        'image',
        'admin_comments',
        'receive_email',
        'receive_notifications_messenger'
    ];
}
