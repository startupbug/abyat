<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('subject_description')->nullable();
            $table->longText('message_description')->nullable();            
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
        Schema::dropIfExists('contact_emails');
    }
}
