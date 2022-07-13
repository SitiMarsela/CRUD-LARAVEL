<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable=[
        'namakelas',
        'namaguru'
    ];

    public function gurus(){
        return $this->belongsTo(Guru::class);
    }

    public function agendas(){
        return $this->HasMany(Agenda::class);
    }
}
