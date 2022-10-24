<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = ['id'];

    public function kelas() {
        return $this->belongsTo(kelas::class);
    }

    public function peminjaman() {
        return $this->hasMany(peminjaman::class);
    }
}
