<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableUsersOtherData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('type_document_id')->unsigned()->index();
            $table->foreign('type_document_id')->references('id')->on('type_documents')->onDelete('cascade');
            $table->string('document_number')->unique();
            $table->string('rol')->default('USER');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type_document_id');
            $table->dropColumn('document_number');
        });
    }
}
