<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'school_number',
        'address'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
