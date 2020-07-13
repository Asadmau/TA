<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Model
{
    //
    protected $table = 'mk_produks';

    public $timestamps = false;
    // const CREATED_AT = null;
    // const UPDATED_AT = null;

    protected $fillable = [
        'kodekat',
        'kodesub',
        'kodesat',
        'nama_brg',
        'jumlah'
    ];

    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    // public $string = mb_strtoupper('kd_akun');

    public function up()
    {
        Schema::connection('mysql')->create('mk_produks', function (Blueprint $table) {

            $table->string('id')->primary()->unique();
            $table->integer('nama_brg');
            $table->integer('kodekat');
            $table->char('kodesub');
            $table->char('kodesat');
            $table->char('jumlah');
        });
    }
}