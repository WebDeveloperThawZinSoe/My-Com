<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable =[
        'category_id',
        'name'
    ];
    use HasFactory;

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}
