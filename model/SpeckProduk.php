<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpeckProduk extends Model
{
    //
    protected $table = 'speck_satuan';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_spec',
        'kode_produk',
        'ketspec',
    ];

    public function up()
    {
        Schema::connection('mysql')->create('speck_satuan', function (Blueprint $table) {
            $table->id('id')->unique();
            $table->string('kode_produk');
            $table->text('ketspec');
        });
    }
}