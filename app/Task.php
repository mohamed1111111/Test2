<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[
        'description',
        'project_id',
        'completed'
    ];
    //
    public function project(){
       return $this->belongsTo(project:: class);
    }
}
