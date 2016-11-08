<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProducts3 extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->string('pcat')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->string('pcat')->nullable()->change();
        });
    }
}
