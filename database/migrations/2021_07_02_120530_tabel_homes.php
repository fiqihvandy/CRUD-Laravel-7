<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelHomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Homes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('content', 500);
            $table->string('image', 100);
            $table->timestamps();
            $table->integer('status');
        });

        DB::table('Homes')->insert(
            array(                
                'title' => 'default',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas numquam necessitatibus quia earum ullam voluptatibus recusandae vitae illo perspiciatis nisi, molestias quis accusamus optio voluptate similique nulla, blanditiis quasi est.',
                'image' => 'laravel.png',
                'created_at' => date('y-m-d', time()),
                'updated_at' => date('y-m-d', time()),
                'status' => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Homes');
    }
}
