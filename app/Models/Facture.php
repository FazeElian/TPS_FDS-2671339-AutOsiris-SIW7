<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facture
 *
 * @property $id
 * @property $customer_id
 * @property $date
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property DetailFacture[] $detailFactures
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facture extends Model
{

    static $rules = [
		'customer_id' => 'required',
		'date' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id','date','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailFactures()
    {
        return $this->hasMany('App\Models\DetailFacture', 'facture_id', 'id'); // Un detalle de factura tiene muchos productos y está ligado a una factura
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_facture')->withPivot('quantity', 'price');
    }
}
