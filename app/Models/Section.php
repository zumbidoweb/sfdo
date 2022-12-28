<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Section extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'title',
        'description',
        'subject_id',
        'order'
    ];

    public function questions()
    {
        return $this->belongsToMany('\App\Models\Question', 'question_section');
    }

    public function subject()
    {
        return $this->belongsTo('\App\Models\Subject');
    }
}
