<?php

namespace Snaketec\Models\Catalog\Category;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Artesaos\Attacher\Traits\HasImage;
use Snaketec\Models\Catalog\Category\Traits\Attribute\CategoryAttribute;
use Snaketec\Models\Catalog\Category\Traits\Mutator\CategoryMutator;
use Snaketec\Models\Catalog\Category\Traits\Relationship\CategoryRelationship;
use Snaketec\Models\Catalog\Category\Traits\Scope\CategoryScope;
use Snaketec\Models\Catalog\Category\Traits\CategoryAccess;

/**
 * Class Category.
 */
class Category extends Model
{
    use CategoryAccess,
        CategoryMutator,
        CategoryScope,
        Notifiable,
        CategoryAttribute,
        CategoryRelationship,
        NodeTrait,
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
    protected $fillable = ['name', 'description', 'user_id', '_lft', '_rgt', 'parent_id'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('catalog.categories_table');
    }
}
