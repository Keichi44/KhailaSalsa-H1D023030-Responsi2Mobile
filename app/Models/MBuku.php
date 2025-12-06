<?php

namespace App\Models;

use CodeIgniter\Model;

class MBuku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul', 'harga', 'jumlah', 'tanggal_masuk', 'volume', 'penulis', 'penerbit'
    ];
}