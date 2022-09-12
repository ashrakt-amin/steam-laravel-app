<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Home extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes  =['wayOfLearning','whoWeAre','accomplishments','vision','mission'];
    protected $guard=[];
}
