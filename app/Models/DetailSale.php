<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailSale
 *
 * @property $id
 * @property $sale_id
 * @property $product_id
 * @property $quantity
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailSale extends Model
{

    static $rules = [
		'sale_id' => 'required',
		'product_id' => 'required',
		'quantity' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sale_id','product_id','quantity','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sale_id');
    }
}
