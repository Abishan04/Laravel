<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name'];

    public function phones()
    {
        return $this->hasOne(Phone::class);
    }
}
