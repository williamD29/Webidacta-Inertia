<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer_number', 'answer', 'image'];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
