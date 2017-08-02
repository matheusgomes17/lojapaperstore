<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Relationship;

/**
 * Trait BudgetAnswerRelationship.
 */
trait BudgetAnswerRelationship
{
    /**
     * BelongsTo relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(config('catalog.user'), 'user_id', 'id');
    }

    /**
     * BelongsTo relations with Cart.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function budgets()
    {
        return $this->belongsTo(config('catalog.budget'), 'budget_id', 'id');
    }
}