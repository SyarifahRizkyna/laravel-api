<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan oleh model ini
    protected $table = 'customers';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = ['name', 'email'];

    // Jika Anda ingin menambahkan atribut lain yang tidak ada dalam database, misalnya:
    // protected $appends = ['full_name'];
    
    // Tentukan apakah timestamp aktif
    public $timestamps = true;
}
