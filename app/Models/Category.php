<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property $id
 * @property $typesOfProducts
 * @property $created_at
 * @property $updated_at
 *
 * @property Homeofficesecurity[] $homeofficesecurities
 * @property Paint[] $paints
 * @property Plumbing[] $plumbings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    
    static $rules = [
		'typesOfProducts' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['typesOfProducts'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function homeofficesecurities()
    {
        return $this->hasMany('App\Models\Homeofficesecurity', 'idCategory', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paints()
    {
        return $this->hasMany('App\Models\Paint', 'idCategory', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plumbings()
    {
        return $this->hasMany('App\Models\Plumbing', 'idCategory', 'id');
    }
    

}
