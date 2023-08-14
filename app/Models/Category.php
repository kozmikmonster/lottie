<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $appends =[
        'parent',
    ];

    #one to many
    public function products()
    {
        return $this->hasmany(Product::class);
    }

    #one to many iverse -tersi
    public function parent()
    {
        return $this->belongsto(Category::class,'parent_id');
    }


    #one to many
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


}






