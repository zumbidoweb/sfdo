<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Subject extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'title',
        'description',
        'quiz_id'
    ];

    public function sections()
    {
        return $this->hasMany('\App\Models\Section');
    }

    public function quiz()
    {
        return $this->belongsTo('\App\Models\Quiz');
    }
}
