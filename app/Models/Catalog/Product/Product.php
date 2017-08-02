<?php

namespace Snaketec\Models\Catalog\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Artesaos\Attacher\Traits\HasImage;
use Snaketec\Models\Catalog\Product\Traits\Attribute\ProductAttribute;
use Snaketec\Models\Catalog\Product\Traits\Mutator\ProductMutator;
use Snaketec\Models\Catalog\Product\Traits\Relationship\ProductRelationship;
use Snaketec\Models\Catalog\Product\Traits\Scope\ProductScope;
use Snaketec\Models\Catalog\Product\Traits\ProductAccess;
use Snaketec\Services\Catalog\Traits\Searchable;

/**
 * Class Product.
 */
class Product extends Model
{
    use ProductAccess,
        ProductScope,
        Notifiable,
        SoftDeletes,
        ProductAttribute,
        ProductMutator,
        ProductRelationship,
        Searchable,
        HasImage;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'category_id', 'category_mother_id', 'name', 'description', 'code', 'status'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.code' => 9,
        ]
    ];


    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('catalog.products_table');
    }
}
