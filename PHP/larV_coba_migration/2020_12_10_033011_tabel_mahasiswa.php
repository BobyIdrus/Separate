<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class buattable extends Migration
{
    /**
     * coba migrations.
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Coba Down
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}
?>