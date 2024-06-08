<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // php artisan make:migration add_column_role_to_users
    // za dodavanje columna u users tablicu
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("role")->default("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    // u slucaju brisanja da se prvo izbrise rola pa onda korisnik
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->drop("role");
        });
    }
};
