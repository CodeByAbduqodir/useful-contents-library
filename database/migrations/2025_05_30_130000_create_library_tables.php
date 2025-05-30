<?php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   return new class extends Migration
   {
       public function up()
       {
           Schema::create('categories', function (Blueprint $table) {
               $table->id();
               $table->string('name')->unique();
               $table->timestamps();
           });

           Schema::create('tags', function (Blueprint $table) {
               $table->id();
               $table->string('name')->unique();
               $table->timestamps();
           });

           Schema::create('resources', function (Blueprint $table) {
               $table->id();
               $table->string('title');
               $table->string('url');
               $table->foreignId('category_id')->constrained()->onDelete('cascade');
               $table->text('description')->nullable();
               $table->timestamps();
           });

           Schema::create('resource_tag', function (Blueprint $table) {
               $table->id();
               $table->foreignId('resource_id')->constrained()->onDelete('cascade');
               $table->foreignId('tag_id')->constrained()->onDelete('cascade');
               $table->timestamps();
           });
       }

       public function down()
       {
           Schema::dropIfExists('resource_tag');
           Schema::dropIfExists('resources');
           Schema::dropIfExists('tags');
           Schema::dropIfExists('categories');
       }
   };