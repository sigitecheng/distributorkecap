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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable(); // Alamat karyawan (boleh kosong)
            $table->date('tanggal_lahir')->nullable(); // Tanggal lahir karyawan (boleh kosong)
            $table->string('nomor_telepon')->nullable(); // Nomor telepon karyawan (boleh kosong)
            $table->enum('status_pekerjaan', ['Kontrak', 'Tetap', 'Magang', 'Paruh waktu', 'Penuh waktu']); // Status pekerjaan karyawan
            $table->enum('status_admin', ['admin', 'super admin'])->default('admin');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable(); // Jenis kelamin karyawan (boleh kosong)
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
