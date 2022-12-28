<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Option extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'title',
        'description',
        'score',
        'question_id',
        'order'
    ];

    public function option()
    {
        return $this->hasMany('\App\Models\Answer');
    }

    public function question()
    {
        return $this->belongsTo('\App\Models\Question');
    }

    public function hits()
    {
        return $this->belongsToMany('\App\Models\Hit');
    }
}
