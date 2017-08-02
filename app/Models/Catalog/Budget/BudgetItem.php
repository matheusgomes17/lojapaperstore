<?php

namespace Snaketec\Models\Catalog\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Snaketec\Models\Catalog\Budget\Traits\Relationship\BudgetItemRelationship;

/**
 * Class BudgetItem
 */
class BudgetItem extends Model
{
    use Notifiable,
        BudgetItemRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'budget_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'budget_id', 'qtd'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('catalog.budgets_items_table');
    }
}