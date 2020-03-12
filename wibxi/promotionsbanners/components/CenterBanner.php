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
