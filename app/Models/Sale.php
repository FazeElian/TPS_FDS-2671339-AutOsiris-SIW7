<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $date
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailSale[] $detailSales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{

    static $rules = [
		'date' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailSales()
    {
        return $this->hasMany('App\Models\DetailSale', 'sale_id', 'id'); // Un detalle de venta tiene muchos productos y está ligado a una venta
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_sale')->withPivot('quantity', 'price');
    }
}
