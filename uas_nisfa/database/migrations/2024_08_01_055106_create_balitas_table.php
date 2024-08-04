<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekme');
            $table->string('nm_pas');
            $table->string('alamat');
            $table->string('status');
            $table->dateTime('tgl_lahir');
            $table->string('nm_ayah');
            $table->string('umur_ayah');
            $table->string('nm_ibu');
            $table->string('umur_ibu');
            $table->string('berat_lahir');
            $table->string('status_imu');
            $table->date('tgl_imu');
            $table->string('suplemen');
            $table->date('tgl_sup');
            $table->string('perkem');
            $table->string('petugas_id');
            $table->string('desas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balitas');
    }
};
