<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paint
 *
 * @property $id
 * @property $product
 * @property $description
 * @property $brand
 * @property $price
 * @property $idCategory
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paint extends Model
{
    
    static $rules = [
		'product' => 'required',
		'description' => 'required',
		'brand' => 'required',
		'price' => 'required',
		'idCategory' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product','description','brand','price','idCategory'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'idCategory');
    }
    

}
