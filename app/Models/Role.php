<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel yang terkait dengan model ini.
    // Jika nama tabel sudah sesuai dengan konvensi Laravel (plural dari nama model), baris ini bisa dihilangkan.
    protected $table = 'roles';

    // Mendefinisikan atribut yang bisa diisi secara massal.
    protected $fillable = ['name', 'description'];

    // Menambahkan relasi ke model lain jika diperlukan.
    // Contoh: Jika setiap role bisa dimiliki oleh banyak user.
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
