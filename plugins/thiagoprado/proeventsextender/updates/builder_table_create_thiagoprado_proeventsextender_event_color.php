<?php namespace ThiagoPrado\ProEventsExtender\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThiagopradoProeventsextenderEventColor extends Migration
{
    public function up()
    {
        Schema::create('thiagoprado_proeventsextender_event_color', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('event_id')->nullable()->unsigned();
            $table->string('color')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thiagoprado_proeventsextender_event_color');
    }
}
