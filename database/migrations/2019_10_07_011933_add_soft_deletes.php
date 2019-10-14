<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikel', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('berita', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('galeri', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('pengumuman', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('kategori_artikel', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('kategori_berita', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('kategori_galeri', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });

        Schema::table('kategori_pengumuman', function(Blueprint $table)
        {   
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
