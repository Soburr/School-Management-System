<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Student extends User
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'student_id',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function post () {
        return $this->hasMany(Post::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
