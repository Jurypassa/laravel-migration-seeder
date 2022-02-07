<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mockery\Exception\NoMatchingExpectationException;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('Nome', 50); 
            $table->text('Descrizione'); 
            $table->float('Prezzo', 7, 2);
            $table->tinyInteger('N°_persone')->unsigned(); 
            $table->tinyInteger('giorni')->unsigned();
            $table->boolean('Volo_incluso')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
