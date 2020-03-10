<?php namespace Wibxi\PromotionsBanners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

  public function pluginDetails()
  {
      return [
          'name' => 'wibxi.promotionsbanners::lang.plugin.name',
          'description' => 'wibxi.promotionsbanners::lang.plugin.description',
          'author'=> 'Wibxi',
          'icon' => 'oc-icon-certificate',
          'homepage' => 'https://wibxi.net'
      ];
  }


    public function registerComponents()
    {
      return [
            'Wibxi\PromotionsBanners\Components\TopBanner' => 'topBanner',
            'Wibxi\PromotionsBanners\Components\CenterBanner' => 'centerBanner',
            'Wibxi\PromotionsBanners\Components\BottomBanner' => 'bottomBanner'
        ];
    }

    public function registerSettings()
    {
    }
}
