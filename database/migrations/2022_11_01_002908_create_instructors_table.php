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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table ->string( column: 'name', length: '50');
            $table ->string( column: 'address', length: '50');
            $table->text( column: 'image')->nullable();
            $table->text( column: 'e-mail');
            $table->string( column: 'mobile', length: '20');
            $table->text( column: 'date_of_birth');
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
        Schema::dropIfExists('instructors');
    }
};
