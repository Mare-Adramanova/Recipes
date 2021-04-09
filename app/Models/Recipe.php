<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingredient;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'source', 'preparation_time', 'instructions', 'hour'];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->withPivot(['quantity']);
    }
}
