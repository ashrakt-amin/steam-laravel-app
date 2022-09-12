<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    public $timestamps = false;
    
    public function courses(){
        return $this->belongsToMany(
            Course::class ,//related model
            'language_course' , //pivot table
            'language_id',//FK in pivot table for current model
            'course_id',//FK in pivot table for related model
            'id',           //PK for current model
            'id'            //PK for related model

        );
    }
        
}
