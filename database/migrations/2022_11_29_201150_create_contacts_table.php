<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255)->nullable(true);
            $table->tinyInteger('gender')->nullable(true);
            $table->string('email', 255)->nullable(true);
            $table->char('postcode', 8)->nullable(true);
            $table->string('address',255)->nullable(true);
            $table->string('building_name',255);
            $table->text('opinion')->nullable(true);
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
        Schema::dropIfExists('contacts');
    }
}
