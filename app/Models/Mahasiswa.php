<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    use HasFactory;
 
    // protected $table = 'mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    // protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    protected $guarded = 'id';


    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    
    public function matakuliah()
    {
        // define the relationship
        return $this->belongsToMany(MataKuliah::class,'mahasiswa_matakuliah','mahasiswa_id','mata_kuliah_id')->withPivot('nilai');
    }

}
