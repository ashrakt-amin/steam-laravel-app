<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTranslation extends Model
{
    use HasFactory;
    public $fillable = ['wayOfLearning','whoWeAre','accomplishments','vision','mission'];

    public $timestamps = false;

}
