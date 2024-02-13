<?php

use App\Models\Major;
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
        Schema::create('mju_students', function (Blueprint $table) {
            $table ->string('student_code')->primary();
            $table ->string('first-name',50);
            $table ->string('last-name',50)->nullable();
            $table ->string('first-name_en',50);
            $table ->string('last-name_en',50)->nullable();
            $table ->unsignedBigInteger('major_id');
            $table ->string('idcard');
            $table ->date('birthdate')->nullable();
            $table ->char('gender',1)->nullable();
            $table ->string('address');
            $table ->string('phone');
            $table ->string('email')->uniqe();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mju_students');
    }

    protected   $primaryKey = 'student_code';
    public function major(){
        return $this ->belongsTo(Major::class);
    }
    protected $fillable = [
        'student_code',
        'first-name',
        'first-name_en' ,
        'major_id' ,
        'idcard',
        'gender',
        'birthdate',
        'address',
        'phone' ,
        'email',
    ];

};
