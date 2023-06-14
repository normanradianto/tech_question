<?php

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
        Schema::table('article', function (Blueprint $table) {
            $table->text('published')->nullable();;
            $table->text('content_type')->nullable();;
            $table->timestamp('authored_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('article', function (Blueprint $table) {
            $table->dropColumn('published');
            $table->tedropColumnxt('content_type');
            $table->dropColumn('authored_on');
        });
    }
};
