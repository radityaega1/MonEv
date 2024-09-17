<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /** Run the migrations. */
    public function up(): void {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('province_id')->constrained();
            $table->foreignId('district_id')->constrained();
            $table->string('address');
            $table->string('image');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->longText('description');
            $table->string('category')->unique();
            $table->integer('status')->default(0)->nullable();
            $table->integer('is_all_day')->default(0)->nullable();
            $table->foreignId('editor_id')->constrained()->cascadeOnDelete();
//            $table->foreignId('city_id')->constrained()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /** Reverse the migrations. */
    public function down(): void {
        Schema::dropIfExists('events');
    }
};
