<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'gender', 'dob'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function programs()
{
    return $this->belongsToMany(Program::class);
}
}
