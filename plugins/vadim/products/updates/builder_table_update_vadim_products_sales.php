<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProductsSales extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_sales', function($table)
        {
            $table->renameColumn('data', 'datetime');
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_sales', function($table)
        {
            $table->renameColumn('datetime', 'data');
        });
    }
}
