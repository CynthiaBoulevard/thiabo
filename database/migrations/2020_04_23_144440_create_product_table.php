
<?php

 

use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

  

class CreateProductTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('product', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titre');
            $table->string('date');
            $table->text('prix');
            $table->text('detail');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('product');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }

}