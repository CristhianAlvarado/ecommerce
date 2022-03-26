<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','slug','color','size','category_id'];

    //Relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //Relacion uno a muchos inversa, lo llamamos en singular porque una subcategoria solo tiene una categoria caso contrario con 
    //categoria que podemos llamar categories
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
