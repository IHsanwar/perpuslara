<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'tabel_buku';

    // You may also want to specify fillable fields to allow mass assignment
    protected $fillable = ['judul', 'penulis', 'tanggal'];
    public $timestamps = false;
}
