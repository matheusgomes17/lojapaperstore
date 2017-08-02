<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Relationship;

/**
 * Trait BudgetItemRelationship.
 */
trait BudgetItemRelationship
{
    /**
     * BelongsTo relations with Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(config('catalog.product'), 'product_id', 'id');
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