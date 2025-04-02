<?php
//
//use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//
//return new class extends Migration
//{
//    /**
//     * Run the migrations.
//     */
//    public function up(): void
//    {
//        Schema::create('cache', function (Blueprint $table) {
//            $table->string('key')->primary();
//            $table->mediumText('value');
//            $table->integer('expiration');
//        });
//
//        Schema::create('cache_locks', function (Blueprint $table) {
//            $table->string('key')->primary();
//            $table->string('owner');
//            $table->integer('expiration');
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::dropIfExists('cache');
//        Schema::dropIfExists('cache_locks');
//    }
//};












use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('brands')) { // Check if the table already exists
            Schema::create('brands', function (Blueprint $table) {
                $table->id();
                $table->string('code')->unique();
                $table->string('name');
                $table->enum('status', ['Active', 'Inactive'])->default('Active');
                $table->timestamps();
            });
        }

//        Schema::create('categories', function (Blueprint $table) {
//            $table->id();
//            $table->string('code')->unique();
//            $table->string('name');
//            $table->enum('status', ['Active', 'Inactive'])->default('Active');
//            $table->timestamps();
//        });
//
//
//        Schema::create('sessions', function (Blueprint $table) {
//            $table->string('id')->primary();
//            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
//            $table->string('ip_address', 45)->nullable();
//            $table->text('user_agent')->nullable();
//            $table->longText('payload');
//            $table->integer('last_activity')->index();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
//        Schema::dropIfExists('password_reset_tokens');
//        Schema::dropIfExists('sessions');
    }
};
