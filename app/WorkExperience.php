<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'present',
        'company_name',
        'description',
        'user_id'
    ];

    public function user()
    {
        $this->belongsTo('App\User', 'user_id');
    }
}
