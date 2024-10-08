<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'is_done',
        'finished_on'
    ];
    // omitted by default, just how eloquent works
    public $timestamps = true;
}
