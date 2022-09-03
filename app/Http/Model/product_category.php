<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class product_category extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    protected $primaryKey = 'id';
    protected $fillable = ['name','parent_id','icon','icon_web','status','ordering'];
}
