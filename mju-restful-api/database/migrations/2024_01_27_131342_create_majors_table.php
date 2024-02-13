<?php

use App\Models\MjuStudent;
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
        Schema::create('majors', function (Blueprint $table) {
            $table ->integer('major_id')->primary();
            $table->string('name', 50);
            $table->string('name_en', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }

    protected $primaryKey = 'major_id';

    public function students()
    {
        return $this->hasMany(MjuStudent::class, 'major_id');
    }

};
