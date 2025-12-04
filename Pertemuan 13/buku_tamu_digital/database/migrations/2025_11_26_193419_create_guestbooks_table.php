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
    Schema::create('guestbooks', function (Blueprint $table) {
        $table->id(); 
        
        $table->string('customer_name');
        $table->string('phone')->nullable(); 
        
        $table->integer('score_food');     
        $table->integer('score_service');  
        $table->integer('score_ambiance'); 
        
        $table->text('message')->nullable(); 

        $table->decimal('fuzzy_score', 5, 2)->nullable(); 
        $table->string('satisfaction_class')->nullable(); 

        $table->timestamps(); 
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guestbooks');
    }
};
