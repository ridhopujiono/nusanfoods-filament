<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'code', 'source', 'page', 'author', 'likes', 'image', 'created_on_website_at', 'last_scraped_at'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'recipe_categories');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }

    public function scrapingLogs()
    {
        return $this->hasMany(ScrapingLog::class);
    }
}
