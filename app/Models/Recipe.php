<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'qty', 'desc_a', 'desc_b', 'cal', 'url_thumb', 'url_vid']; // tambahkan $fillable
}
