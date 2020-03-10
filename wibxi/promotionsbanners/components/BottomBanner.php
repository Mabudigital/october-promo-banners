<?php
namespace Wibxi\PromotionsBanners\Components;

use Wibxi\PromotionsBanners\Classes\PromoBanners;

class BottomBanner extends PromoBanners {

    public function componentDetails() {
        return [
            'name' => 'wibxi.promotionsbanners::lang.promobanner.bottomtitle',
            'description' => 'wibxi.promotionsbanners::lang.promobanner.bottomdescription'
        ];
    }

    public function onRun() {
            parent::onRun();
            $this->addCss('assets/css/bottompbanner.css');
    }
}
