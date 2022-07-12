<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'untie_email',
        'skype',
        'teaching_profession',
        'child_name',
        'child_gender',
        'child_age',
        'birth_date',
        'phone',
        'another_phone',
        'interface_language',
        'time_zone',
        'child_hobbies',
        'wishes_for_training',
        'study_notes',
        'image',
        'admin_comments',
        'receive_email',
        'receive_notifications_messenger',
        'user_id'
    ];
}
