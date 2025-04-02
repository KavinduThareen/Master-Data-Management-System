<?php





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
