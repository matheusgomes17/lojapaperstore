<?php

namespace Snaketec\Models\Catalog\Budget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Snaketec\Models\Catalog\Budget\Traits\Attribute\BudgetAnswerAttribute;
use Snaketec\Models\Catalog\Budget\Traits\Relationship\BudgetAnswerRelationship;
use Snaketec\Models\Catalog\Budget\Traits\Scope\BudgetAnswerScope;

/**
 * Class BudgetAnswer
 */
class BudgetAnswer extends Model
{
    use BudgetAnswerScope,
        Notifiable,
        BudgetAnswerAttribute,
        BudgetAnswerRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'budgets_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'budget_id', 'message'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('catalog.budgets_answers_table');
    }
}