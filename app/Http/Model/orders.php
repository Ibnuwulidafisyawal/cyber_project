<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['invoice_id','customer_id','name','phone','address','kelurahan','kecamatan','kota','provinsi','kode_pos','latitude','longitude','agent_id','agent_name','payment_method','payment_link','payment_date','buy_by','payment_total','coupon_id','payment_discount_code','payment_discount','payment_final','order_weight','order_distance','delivery_status','delivery_fee','delivery_track','delivery_time','delivery_date','order_time','status'];
}
