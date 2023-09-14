<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Facture[] $factures
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{

    static $rules = [
		'name' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function factures()
    // {
    //     return $this->hasMany('App\Models\Facture', 'role_id', 'id');
    // }
}
