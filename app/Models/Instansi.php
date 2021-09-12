<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $fillable = ['nama'];
    public function pilihan_satus(){
        return $this->hasMany(PilihanSatu::class);
    }
    public function pilihan_duas(){
        return $this->hasMany(PilihanDua::class);
    }
    public function pilihan_tigas(){
        return $this->hasMany(PilihanTiga::class);
    }
    use HasFactory;
}
