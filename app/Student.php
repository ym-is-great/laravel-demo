<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // my code

class Student extends Model
{
    
    // my code start
    
    use SoftDeletes;

    protected $fillable = [
        'number',
        'name',
        'class_id'
    ];

    public function class ()
    {
        return $this->hasOne('App\StudentClass', 'id', 'class_id');
    }

    // my code end
}
