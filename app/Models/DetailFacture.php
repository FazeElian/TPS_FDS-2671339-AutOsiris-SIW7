<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

/**
 * Class DetailFacture
 *
 * @property $id
 * @property $facture_id
 * @property $product_id
 * @property $quantity
 * @property $unit_price
 * @property $created_at
 * @property $updated_at
 *
 * @property Facture $facture
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailFacture extends Model
{

    static $rules = [
		'facture_id' => 'required',
		'product_id' => 'required',
		'quantity' => 'required',
		'unit_price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['facture_id', 'product_id', 'quantity', 'price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facture()
    {
        return $this->hasOne('App\Facture', 'id', 'facture_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

        // Función que permite asignar el producto a el Detalle/Lista de la factura
        public function product()
        {
            return $this->belongsTo(Product::class);
        }
    }
