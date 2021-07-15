<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCake extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    public $table = 'category_cakes';
}
