<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $guarded = 'id';
    public function mahasiswa()
    {
        // define the relationship
        return $this->belongsToMany(Mahasiswa::class,'mahasiswa_matakuliah','mata_kuliah_id','mahasiswa_id');
    }
}
