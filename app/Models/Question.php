<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Question extends Model  implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'title',
        'description',
        'order'
    ];

    public function options()
    {
        return $this->hasMany('\App\Models\Option');
    }

    public function answers()
    {
        return $this->hasMany('\App\Models\Answer');
    }

    public function sections()
    {
        return $this->belongsToMany('\App\Models\Section', 'question_section');
    }
}
