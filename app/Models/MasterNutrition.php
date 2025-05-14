<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterNutrition extends Model
{
    use HasFactory;

    protected $table = 'master_nutritions';
    protected $fillable = ['attr_id', 'nutrition_name'];
}
