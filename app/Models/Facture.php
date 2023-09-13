<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facture
 *
 * @property $id
 * @property $role_id
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facture extends Model
{

    static $rules = [
        "id" => "id",
		'role_id' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ["id", 'role_id','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }

    public function product(){
        return $this->belongsToMany(Product::class, 'factures')
        ->withPivot('amountProduct', 'totalProduct'); // Añade columnas
    }
}
