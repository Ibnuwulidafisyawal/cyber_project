<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['product_name','category','type','item','weight','sku','price_sell','price_promo','price_agent','photo','recommendation','description','status','ordering'];
}
