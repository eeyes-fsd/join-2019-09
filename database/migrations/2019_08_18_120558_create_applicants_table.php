<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('姓名');
            $table->string('college')->comment('书院');
            $table->string('class')->comment('班级')->nullable();
            $table->string('gender')->comment('性别');
            $table->date('birthday')->comment('生日')->nullable();
            $table->string('cellphone')->comment('电话号码');
            $table->string('qq')->comment('qq号码')->nullable();
            $table->integer('department_id')->comment('报名的部门ID');
            $table->text('wanna_say')->comment('留言')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
