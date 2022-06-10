<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_contacts', function (Blueprint $table) {
            $table->id();
            $table->text('overview_title')->nullable();
            $table->text('overview_text')->nullable();
            $table->text('feedback_text')->nullable();
            $table->text('gallery_text')->nullable();
            $table->text('blogs_text')->nullable();
            $table->string('address')->nullable();
            $table->string('phones')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_contacts');
    }
};
