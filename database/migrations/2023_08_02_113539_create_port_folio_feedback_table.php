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
        Schema::create('port_folio_feedback', function (Blueprint $table) {
            $table->id('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phn');
            $table->enum('gender',["male","female","other"]);
            $table->text('message')->nullable(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('port_folio_feedback');
    }
};
