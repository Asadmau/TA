<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Satuan extends Model
{
    //
    protected $table = 'mk_satuan';
    public $timestamps = false;



    public function up()
    {
        Schema::connection('mysql')->create('mk_satuan', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_satuan');
            $table->text('ketsatuan');
        });
    }
    protected $fillable = [
        'nama_satuan',
        'ketsatuan',
    ];
}