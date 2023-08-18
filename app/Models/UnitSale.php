<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UnitSale
 *
 * @property $id
 * @property $product_id
 * @property $amountProduct
 * @property $priceProduct
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UnitSale extends Model
{
    
    static $rules = [
		'product_id' => 'required',
		'amountProduct' => 'required',
		'priceProduct' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','amountProduct','priceProduct'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    

}
