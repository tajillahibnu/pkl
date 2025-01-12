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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique()->nullable();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('primary_role_id')->nullable()->after('id')->constrained('roles')->onDelete('set null');
        });
        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('primary_role_kode')->nullable()->after('id'); // Kolom kode role
        //     $table->foreign('primary_role_kode')
        //         ->references('kode') // Referensi ke kolom 'kode' di tabel roles
        //         ->on('roles')
        //         ->onDelete('set null'); // Atur relasi jika role dihapus
        // });

        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            // $table->string('role_kode'); // Kolom kode untuk relasi dengan roles
            // $table->foreign('role_kode') // Definisikan foreign key
            //     ->references('kode') // Merujuk ke kolom kode pada tabel roles
            //     ->on('roles')
            //     ->onDelete('cascade'); // Hapus jika role terkait dihapus
            $table->boolean('is_primary')->default(false); // Menandakan apakah role ini adalah role utama
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
    }
};
