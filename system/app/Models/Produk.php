<?php

namespace App\Models;

Class Produk extends Model{
    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'berat' => 'datetime:2',
    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaAttribute(){
        return "Rp.".number_format($this->attributes['harga']);
    }

   
}