<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('userId');
            $table->bigInteger('author', 100)->nullable(false);
			$table->string('title', 200)->nullable(false);
			$table->string('publisher', 100)->nullable(false);
			$table->date('publish_date')->nullable();
			$table->integer('publish_year',4)->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}