<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agent extends Model
{
    use HasFactory;
    protected $table = 'agent';
    protected $primaryKey = 'id';
    protected $fillable = ['store_name','partner_id','pin_lock','store_open','store_close','address','kelurahan','kecamatan','kota','provinsi','kode_pos','latitude','longitude','ktp','kk','npwp','no_rekening','buku_rekening','point','credit_limit','subscription','max_load','default_agent'];
}
