<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama','nim','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','angkatan','sks','email','no_hp','keterangan','foto'];
    // protected $guarded = ['id','created_at','updated_at'];
}
