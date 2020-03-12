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

    public function defineProperties()
    {
        return [
          'height' => [
              'title'             => 'wibxi.promotionsbanners::lang.promobanner.height',
              'description'       => 'wibxi.promotionsbanners::lang.promobanner.heightdescription',
              'default'           => '150px',
              'type'              => 'string',
              'showExternalParam' => false
          ],
        ];
    }
}
