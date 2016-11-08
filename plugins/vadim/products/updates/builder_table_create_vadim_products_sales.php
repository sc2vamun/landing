<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVadimProductsSales extends Migration
{
    public function up()
    {
        Schema::create('vadim_products_sales', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('product');
            $table->string('client');
            $table->dateTime('data');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vadim_products_sales');
    }
}
