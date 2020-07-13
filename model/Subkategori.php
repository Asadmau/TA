<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subkategori extends Model
{
    //
    protected $table = 'mk_subkategoris';
    public $incrementing = false;
    protected $primaryKey = 'id';

    public $timestamps = true;
    const CREATED_AT = 'add_date';
    const UPDATED_AT = 'updated_date';



    public function up()
    {
        Schema::connection('mysql')->create('mk_subkategoris', function (Blueprint $table) {
            $table->char('id')->primary()->unique();
            $table->integer('kodekat');
            $table->string('namasub');
            $table->text('ketsub');
            $table->timestamp('add_date')->useCurrent();
            $table->timestamp('updated_date')->nullable();
        });
    }
    protected $fillable = ['namasub', 'kodekat', 'ketsub', 'updated_date'];
}