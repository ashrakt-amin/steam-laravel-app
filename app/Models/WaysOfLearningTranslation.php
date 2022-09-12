<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaysOfLearningTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['way'];
    public $timestamps = false;
}
