<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'opens_at',
        'closes_at',
        'content',
        'image',
        'access',
        'is_published'
    ];

    protected $dates = [
        'opens_at', 'closes_at'
    ];

    public function subjects()
    {
        return $this->hasMany('\App\Models\Subject');
    }
    public function submissions()
    {
        return $this->hasMany('\App\Models\Submission');
    }
}
