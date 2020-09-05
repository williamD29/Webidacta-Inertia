<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'question_number', 'result'];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function sheet()
    {
        return $this->belongsTo('App\Sheet');
    }
}
