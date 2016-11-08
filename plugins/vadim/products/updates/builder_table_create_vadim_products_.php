<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVadimProducts extends Migration
{
    public function up()
    {
        Schema::create('vadim_products_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('pname');
            $table->integer('pprice');
            $table->text('pdescription');
            $table->string('pparam');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vadim_products_');
    }
}
