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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->boolean('featured')->default(0);
            $table->boolean('offer')->default(0);
            $table->string('type');
            $table->string('image');
            $table->string('address');
            $table->string('title');
            $table->string('rate');
            $table->longText('paragraph');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('area');
            $table->text('slug');
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
        Schema::dropIfExists('portfolios');
    }
};
