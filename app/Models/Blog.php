<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    // Nama tabel (jika tidak mengikuti konvensi Laravel)
    protected $table = 'blogs';
    
    // Field yang boleh diisi mass-assignment
    protected $fillable = [
        'judul',
        'penulis',
        'tanggal',
        'konten',
        'slug',
        'file'
    ];
}
