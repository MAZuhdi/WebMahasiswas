<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nim', 'nama', 'tempat_lahir', 'tanggal_lahir', 'fakultas', 'jurusan', 'ipk'];
    protected $guarded = [];
}
