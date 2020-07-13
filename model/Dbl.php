<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dbl extends Model
{
    //
    protected $table = 'mk_dbl';
    public $timestamps = false;



    public function up()
    {
        Schema::connection('mysql')->create('mk_dbl', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_dbl');
            $table->text('ketdbl');
        });
    }
    protected $fillable = [
        'nama_dbl',
        'ketdbl',
    ];
}