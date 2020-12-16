<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'ageInfo'
    ];
    protected $casts = [
        'dob' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAgeInfoAttribute()
    {
        $date = $this->dob->diff();
        return "Years : {$date->y} Month : {$date->m} day: {$date->d} ";
    }

}
