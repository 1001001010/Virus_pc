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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->text('description');
            $table->timestamps();
        });
        DB::table('categories')->insert([
            ['name' => 'Оптимальные компьютеры', 'link' => 'optimal_pc', 'description' => 'Оптимальные - универсальные компьютеры, которые могут использоваться для различных задач, включая игры, работу с документами и интернет-серфинг.'],
            ['name' => 'Мощные компьютеры', 'link' => 'powerful_pc', 'description' => 'Мощные - мощные компьютеры, которые предназначены для, востребовательных задач.'],
            ['name' => 'Кастомные компьютеры', 'link' => 'custom_pc', 'description' => 'Кастомные - описание для кастомных компов'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
