<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nisn', 'skhun', 'no_ijazah', 'nama_lengkap', 'tanggal_lahir', 'agama', 'alamat', 'jenis_kelamin', 'no_telp', 'email', 'jurusan', 'nama_ayah', 'nama_ibu', 'nama_wali'
    ];
}
