<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->Text('meta_title');
            $table->Text('meta_keywords');
            $table->Text('meta_description');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('youtube');
            $table->string('skype');
            $table->integer('home_id1');
            $table->integer('home_num_id1');
            $table->integer('home_id2');
            $table->integer('home_num_id2');
            $table->Text('home_introVideo');
            $table->Text('footer_left');
            $table->Text('footer_right');
            $table->Text('home_intro_partner');
            $table->Text('home_intro_customer');
            $table->Text('home_intro_select');
            $table->Text('home_intro_select_1');
            $table->Text('home_intro_select_2');
            $table->Text('home_intro_select_3');
            $table->Text('home_intro_select_4');
            $table->integer('list_num_project');
            $table->integer('list_num_pages');
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
        Schema::dropIfExists('infos');
    }
}
