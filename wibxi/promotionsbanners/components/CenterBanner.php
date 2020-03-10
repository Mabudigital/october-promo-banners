<?php
namespace Wibxi\PromotionsBanners\Components;

use Wibxi\PromotionsBanners\Classes\PromoBanners;

class CenterBanner extends PromoBanners {

    public function componentDetails() {
        return [
            'name' => 'wibxi.promotionsbanners::lang.promobanner.centertitle',
            'description' => 'wibxi.promotionsbanners::lang.promobanner.centerdescription'
        ];
    }

    public function onRun() {
            parent::onRun();
            $this->addCss('assets/css/centerbanner.css');
    }
}
