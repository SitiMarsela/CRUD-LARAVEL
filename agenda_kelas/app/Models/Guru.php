<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable=[
        'namaguru',
        'mapel'
    ];

    public function walas(){
        return $this->HasMany(Kelas::class);
    }

    public function agendas(){
        return $this->HasMany(Agenda::class);
    }
}
