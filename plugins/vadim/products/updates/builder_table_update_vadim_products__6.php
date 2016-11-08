<?php namespace Vadim\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVadimProducts6 extends Migration
{
    public function up()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->renameColumn('pref', 'slug');
        });
    }
    
    public function down()
    {
        Schema::table('vadim_products_', function($table)
        {
            $table->renameColumn('slug', 'pref');
        });
    }
}
