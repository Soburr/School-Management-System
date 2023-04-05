<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
