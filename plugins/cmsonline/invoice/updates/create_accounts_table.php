<?php namespace Cmsonline\Invoice\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('cmsonline_invoice_accounts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cmsonline_invoice_accounts');
    }
}
