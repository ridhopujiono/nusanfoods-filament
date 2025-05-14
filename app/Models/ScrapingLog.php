<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapingLog extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'start_date', 'end_date', 'thread', 'status', 'batch_id', 'error_message'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
