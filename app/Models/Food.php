<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'price', 
        'is_avail', 
        'desc_a', 
        'desc_b', 
        'cal', 
        'url_thumb', 
        'url_vid'
    ]; // tambahkan $fillable
}