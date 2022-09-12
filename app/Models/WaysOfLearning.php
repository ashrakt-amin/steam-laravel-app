<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class WaysOfLearning extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['way'];
    
    protected $guard=[];
    public $timestamps = false;
}
