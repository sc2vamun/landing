<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProducts extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->string('pparam')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->string('pparam')->nullable(false)->change();
        });
    }
}
