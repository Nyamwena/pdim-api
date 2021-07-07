<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScannedProductsReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode','deviceType','deviceId','ratings','comments'
    ];
}
