<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Post extends Model
{
    use HasFactory, Actionable;
    protected $casts = [
        'date' => 'datetime',
        'publish_at' => 'datetime',
        'publish_until' => 'datetime',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    protected $guarded = [];

}
