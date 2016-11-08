<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProducts4 extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->integer('pcolor')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->dropColumn('pcolor');
        });
    }
}
