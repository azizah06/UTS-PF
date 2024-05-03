<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_satuan extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->hasMany(tb_barang::class, 'satuan_barang_id');
    }
}
