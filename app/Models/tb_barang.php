<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;

    public function satuan()
    {
        return $this->belongsTo(tb_satuan::class, 'satuan_barang_id');
    }
}
