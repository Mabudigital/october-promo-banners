<?php
namespace Wibxi\PromotionsBanners\Classes;

use Cms\Classes\ComponentBase;
use Wibxi\PromotionsBanners\Models\PromoBanner;

abstract class PromoBanners extends ComponentBase {

  public function onRun() {
      $this->promobanner = $this->loadBanner();
  }

  protected function loadBanner() {
      return PromoBanner::all();
  }

  public $promobanner;

}
