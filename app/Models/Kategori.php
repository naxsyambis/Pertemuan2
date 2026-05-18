<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // Tambahkan baris ini untuk mendefinisikan nama tabel secara manual
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}