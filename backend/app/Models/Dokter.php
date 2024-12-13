<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = ['nama', 'alamat', 'no_hp', 'id_poli'];

    // Relasi ke Poli model
    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
}
