<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'barcode',
    'name',
    'price',
    'quantity',
    'description'
])]
#[Table('products')]
class Product extends Model
{
    use HasFactory;
}
