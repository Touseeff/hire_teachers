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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')
                ->nullable()
                ->default(2)
                ->constrained('roles')
                ->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('qualification')->nullable();
            $table->string('cv')->nullable();
            $table->string('user_status')->nullable()->default('pending');
            $table->string('reset_password')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('school_title')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('level')->nullable();
            $table->string('details')->nullable();
            $table->string('school_status')->nullable()->default('pending');
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
