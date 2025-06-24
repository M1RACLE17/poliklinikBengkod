<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['pasien', 'dokter', 'admin'])->default('pasien')->after('password');
            }

            if (!Schema::hasColumn('users', 'id_poli')) {
                $table->unsignedBigInteger('id_poli')->nullable()->after('role');
                $table->foreign('id_poli')->references('id')->on('poli')->onDelete('cascade');
            }

            if (!Schema::hasColumn('users', 'no_ktp')) {
                $table->string('no_ktp', 255)->nullable()->after('id_poli');
            }

            if (!Schema::hasColumn('users', 'no_rm')) {
                $table->string('no_rm', 25)->nullable()->after('no_ktp');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign first if column exists
            if (Schema::hasColumn('users', 'id_poli')) {
                $table->dropForeign(['id_poli']);
            }

            $columns = ['role', 'id_poli', 'no_ktp', 'no_rm'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
}
