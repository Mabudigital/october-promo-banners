<?php
namespace Wibxi\PromotionsBanners\Components;

use Wibxi\PromotionsBanners\Classes\PromoBanners;
class TopBanner extends PromoBanners {

    public function componentDetails() {
        return [
            'name' => 'wibxi.promotionsbanners::lang.promobanner.toptitle',
            'description' => 'wibxi.promotionsbanners::lang.promobanner.topdescription'
        ];
    }

    public function onRun() {
            parent::onRun();
            $this->addCss('assets/css/topbanner.css');
            $this->addCss('assets/css/animate.css');
            $this->addJs('assets/js/main.js');
            $this->addJs('assets/js/jquery.easing.1.3.js');
            $this->addJs('assets/js/jquery.waypoints.min.js');
    }



}
