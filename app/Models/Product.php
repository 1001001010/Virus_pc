<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
        'category_id',
        'videocard',
        'processor',
        'otherboard',
        'cooling',
        'ram',
        'sd',
        'power_supply',
        'case',
    ];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
    public function baskets() 
    {
        return $this->hasMany(Basket::class);
    }
}