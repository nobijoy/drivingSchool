<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->text('short_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->double('fee')->nullable();
            $table->string('duration')->nullable();
            $table->double('min_deposit')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('utility')->nullable();
            $table->string('domain')->nullable();
            $table->tinyInteger('is_featured')->default(1);
            $table->tinyInteger('is_active')->default(1);
            $table->UnsignedBigInteger('created_by')->Unsigned()->nullable();
            $table->UnsignedBigInteger('updated_by')->Unsigned()->nullable();
            $table->UnsignedBigInteger('deleted_by')->Unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('courses');
    }
}
