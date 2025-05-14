<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientNutritionDetail extends Model
{
    use HasFactory;
    protected $table = 'ingredient_nutrition_details';
    protected $fillable = ['ingredient_nutrition_id', 'attr_id', 'value'];

    public function masterNutrition()
    {
        return $this->belongsTo(MasterNutrition::class, 'attr_id', 'attr_id');
    }
}
