<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;

    protected $fillable = ['noSurat', 'nama', 'tempatTglLahir', 'kelamin', 'negara', 'pendidikan', 'agama', 'pekerjaan', 'status_pernikahan', 'nik', 'alamat', 'keterangan', 'ttd'];
}
