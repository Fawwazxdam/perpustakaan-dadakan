<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $guarded = ['id'];

    public function peminjaman() {
        return $this->belongsTo(peminjaman::class);
    }

    public function detail_pengembalain() {
        return $this->hasMany(detail_pengembalian::class);
    }
}
