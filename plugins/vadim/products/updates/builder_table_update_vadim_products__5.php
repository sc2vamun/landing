<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProducts5 extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->string('pref')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->dropColumn('pref');
        });
    }
}
