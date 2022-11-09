<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'voucher_id',
        'vendor_id',
        'qty',
        'total',
        'payment_method',
        'translation_id',
        'voucher_images',
        'translation_image',
        'products',
    ];
}
