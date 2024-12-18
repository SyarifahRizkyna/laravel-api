<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cashier extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel yang digunakan oleh model
    protected $table = 'cashiers';

    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Kolom-kolom yang tidak dapat diubah (guarded)
    protected $guarded = [];

    // Menyembunyikan kolom sensitif (misalnya, password) dari array hasil JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Menentukan tipe atribut untuk password
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Jika menggunakan bcrypt untuk password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

