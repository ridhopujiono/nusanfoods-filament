<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientNutrition extends Model
{
    use HasFactory;
    protected $table = 'ingredient_nutritions';
    protected $fillable = ['ingredient_id', 'food_name'];

    public function ingredientNutritionDetail()
    {
        return $this->hasMany(IngredientNutritionDetail::class);
    }
}
