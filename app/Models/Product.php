<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Product extends Model
{
    use softDeletes;
    protected $fillable=["product_name","price","detals"];
    protected $dates=['deleted_at'];
}
