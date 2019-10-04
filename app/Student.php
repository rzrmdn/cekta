<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama','nim','tempat_lahir','tanggal_lahir','jenis_kelamin','alamat','angkatan','sks','email','no_hp','keterangan','foto'];
    // protected $guarded = ['id','created_at','updated_at'];
}
