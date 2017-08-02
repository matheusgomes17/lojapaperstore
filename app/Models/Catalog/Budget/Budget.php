<?php

namespace Snaketec\Models\Catalog\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Snaketec\Models\Catalog\Budget\Traits\Attribute\BudgetAttribute;
use Snaketec\Models\Catalog\Budget\Traits\Mutator\BudgetMutator;
use Snaketec\Models\Catalog\Budget\Traits\BudgetAccess;
use Snaketec\Models\Catalog\Budget\Traits\Relationship\BudgetRelationship;
use Snaketec\Models\Catalog\Budget\Traits\Scope\BudgetScope;

/**
 * Class Cart.
 */
class Budget extends Model
{
    use BudgetScope,
        BudgetAccess,
        Notifiable,
        BudgetAttribute,
        BudgetMutator,
        BudgetRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'budgets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'manager_id', 'status', 'height', 'width'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('catalog.budgets_table');
    }
}