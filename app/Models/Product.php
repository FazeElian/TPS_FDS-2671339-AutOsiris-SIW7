<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $categorie_id
 * @property $description
 * @property $image
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'name' => 'required',
		'code' => 'required',
		'categorie_id' => 'required',
		'description' => '',
        'image' => '',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','code','categorie_id','description','image','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categorie_id');
    }

    public function factures()
    {
        return $this->belongsToMany(Facture::class, 'detail_facture')->withPivot('quantity', 'price');
    }
}
