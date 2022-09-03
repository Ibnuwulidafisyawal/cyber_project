<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class customer extends Model
{
    // use HasFactory;
    protected $table = '_customer';
    // protected $connection = 'pgsql_main';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['referral_id','address','kelurahan','kecamatan','kota','provinsi','kode_pos','latitude','longitude','no_rekening','buku_rekening','point','default_address','created_at'];
}
