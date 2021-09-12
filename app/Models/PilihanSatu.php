<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanSatu extends Model
{
    protected $fillable = ['user_id', 'instansi_id'];
    public function instansi(){
        return $this->belongsTo(Instansi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
