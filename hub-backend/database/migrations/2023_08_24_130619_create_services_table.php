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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            //columns: name, description, host, port, protocol, path, enum status.

            $table->string('name'); 
            $table->string('description');
            $table->string('host');
            $table->string('port');
            $table->string('protocol');
            $table->string('path');
            $table->enum('status', ['active', 'inactive'])->default('inactive');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
