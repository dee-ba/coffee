<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order_Item extends Model
{
	public $table = "order_items";
    use HasFactory;

}