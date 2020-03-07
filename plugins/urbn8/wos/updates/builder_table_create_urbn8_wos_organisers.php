<?php namespace Urbn8\Wos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUrbn8WosOrganisers extends Migration
{
    public function up()
    {
        Schema::create('urbn8_wos_organisers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            

            $table->string('website', 256)->nullable();
            $table->string('phone', 32)->nullable();
            $table->string('email', 62)->nullable();
            $table->string('facebook', 62)->nullable();
            $table->string('twitter', 62)->nullable();

            $table->string('address', 256)->nullable();

            $table->text('desc')->nullable();

            $table->dateTime('open_at')->nullable();
            $table->dateTime('close_at')->nullable();

            $table->integer('status')->nullable();
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('urbn8_wos_organisers');
    }
}
