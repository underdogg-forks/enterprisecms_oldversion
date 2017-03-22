<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->default(0)->index('fk_usr_company');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('isactive')->default(1);
            $table->boolean('is_delete')->default(0);
            $table->integer('primary_dpt')->unsigned()->nullable()->index('fk_usr_primary_dpt');
            $table->softDeletes();
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
        Schema::dropIfExists('staff');
    }
}
