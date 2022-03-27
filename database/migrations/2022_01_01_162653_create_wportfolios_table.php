<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWportfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wportfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('client')->nullable();
            $table->text('project_date')->nullable();
            $table->text('project_url')->nullable();
            $table->string('image');
            $table->string('featured_image');
            $table->integer('category_id')->unsigned();
            $table->text('description') -> nullable();
            $table->timestamp('published_at');
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
        Schema::dropIfExists('wportfolios');
    }
}
