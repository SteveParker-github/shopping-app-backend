<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $category = Category::firstOrCreate(['name'=>'Unassigned']);
        Schema::create('products', function (Blueprint $table)use(&$category) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')
            ->default($category->id)
            ->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
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
        Schema::dropIfExists('products');
    }
}
