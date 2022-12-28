<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'score',
        'question_id',
        'section_id',
        'subject_id',
        'quiz_id',
        'option_id',
        'user_id'
    ];



    public function quizs()
    {
        return $this->belongsTo('\App\Models\Quiz');
    }

    public function subject()
    {
        return $this->belongsTo('\App\Models\Subject');
    }

    public function section()
    {
        return $this->belongsTo('\App\Models\Section');
    }

    public function question()
    {
        return $this->belongsTo('\App\Models\Question');
    }

    public function option()
    {
        return $this->belongsTo('\App\Models\Option');
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
}
