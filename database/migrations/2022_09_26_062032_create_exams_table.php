<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name', 100);
            $table->longText('description')->nullable();
            $table->longText('features')->nullable();
            $table->string('course_code');
            $table->unsignedInteger('catagory_id');
            $table->time('duration');
            $table->string('upload_syllabus')->nullable();
            $table->integer('marks_per_question');
            $table->integer('negative_marking_per_question');
            $table->integer('number_of_questions');
            $table->bigInteger('course_fee');
            $table->integer('number_of_subjects');
            $table->bigInteger('discount_fee');
            $table->bigInteger('registation_fee');
            $table->bigInteger('exam_fee');
            $table->float('commission');
            $table->integer('ratings');
            $table->longText('reviews')->nullable();
            $table->string('video_link');
            $table->longText('curriculam')->nullable();
            $table->boolean('publish');
            $table->boolean('status');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')
                ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

            $table->foreign('catagory_id')->references('id')->on('exam_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
