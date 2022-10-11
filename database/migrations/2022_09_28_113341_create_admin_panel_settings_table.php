<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPanelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('system_name',150);
            $table->string('photo',250)->nullable();
            $table->integer('active')->default(1);
            $table->string('general_alert',150)->nullable();
            $table->string('address',250);
            $table->string('phone',100);
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('company_code');
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
        Schema::dropIfExists('admin_panel_settings');
    }
}
