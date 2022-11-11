<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'sub_category_id',
        'image',
        'description'
    ];

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function SubCategory(){
        return $this->belongsTo('App\Models\SubCategory');
    }

}
