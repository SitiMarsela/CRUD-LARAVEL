<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable=[
        'namaguru',
        'mapel',
        'materi',
        'jenis',
        'link',
        'absensi_siswa',
        'foto',
        'namakelas',
        'ketguru',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function gurus(){
        return $this->belongsTo(Guru::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
