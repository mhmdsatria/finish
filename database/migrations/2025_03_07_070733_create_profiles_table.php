<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_puskesmas');
            $table->string('email'); // pastikan ini ada
            $table->string('struktur_organisasi')->nullable();
            $table->timestamps();
        });
    }
    
    

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
