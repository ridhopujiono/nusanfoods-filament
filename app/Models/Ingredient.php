<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'title', 'value', 'unit', 'description', 'analyzed'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function ingredientNutrition()
    {
        return $this->hasMany(IngredientNutrition::class);
    }
}
