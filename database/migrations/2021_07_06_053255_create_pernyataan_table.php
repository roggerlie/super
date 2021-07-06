<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePernyataanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernyataan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ortu', 100);
            $table->text('alamat_ortu');
            $table->string('hp_ortu', 100);
            $table->string('nama_siswa', 100);
            $table->enum('jenjang', ['TK', 'SD', 'SMP', 'SMA', 'SMKBM', 'SMKTR']);
            $table->string('kelas', 100);
            $table->string('nisn', 100);
            $table->text('alamat_siswa');
            $table->string('hp_siswa', 100);
            $table->enum('status', ['Approved', 'Rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pernyataan');
    }
}
