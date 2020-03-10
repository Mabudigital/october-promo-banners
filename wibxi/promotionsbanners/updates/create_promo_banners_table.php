<?php namespace Wibxi\PromotionsBanners\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePromoBannersTable extends Migration
{
    public function up()
    {
        Schema::create('wibxi_promotionsbanners_promo_banners', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('promo_name');
            $table->string('promo_position');
            $table->string('promo_image')->nullable();
            $table->string('promo_background_color')->nullable()->default('#000000');
            $table->string('promo_text')->nullable();
            $table->string('promo_text_color')->nullable()->default('#ffffff');
            $table->string('promo_link')->nullable();
            $table->boolean('promo_status')->default(true);
            $table->dateTime('promo_start_date');
            $table->dateTime('promo_end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wibxi_promotionsbanners_promo_banners');
    }
}
