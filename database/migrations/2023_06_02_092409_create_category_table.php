<?php

use App\Modules\Inventory\Entity\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Inv_category', function (Blueprint $table) {
            $table->id();
            $table->string("name",250);
            $table->string("code",100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Inv_category');
    }
    public function Index()
    {
        $data=Category::all();//retrieve all data from database into $data
        return view(inventory.category.Index);
    }
};
