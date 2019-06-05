<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{

    protected $table = 'resumes';

    protected $casts = [
        'key_skills' => 'array',
        'education' => 'array',
        'work_experience' => 'array',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'postal',
        'phone',
        'mobile',
        'personal_statement',
        'key_skills',
        'education',
        'work_experience',
        'references',
        'user_id'
    ];

    protected $hidden = ['hidden'];

    public function user(){
        $this->belongsTo('App\User');
    }

}
