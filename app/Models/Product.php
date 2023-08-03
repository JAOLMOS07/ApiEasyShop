<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;


class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'stock',
        'url',

    ];

    public function Categories(){
        return $this->belongsToMany(Category::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
