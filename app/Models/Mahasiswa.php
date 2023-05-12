<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    use HasFactory;
 
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'kelas',
        'jurusan',
        'no_handphone',
        'tanggal_lahir'
    ];
}
