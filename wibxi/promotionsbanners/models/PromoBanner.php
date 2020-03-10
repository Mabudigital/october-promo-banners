<?php namespace Wibxi\PromotionsBanners\Models;

use Model;

/**
 * Model
 */
class PromoBanner extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'wibxi_promotionsbanners_promo_banners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
