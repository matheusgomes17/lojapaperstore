<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Relationship;

/**
 * Trait BudgetRelationship.
 */
trait BudgetRelationship
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
     * BelongsTo relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function managers()
    {
        return $this->belongsTo(config('catalog.user'));
    }

    /**
     * HasMany relations with BudgetItem.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(config('catalog.budget_item'), 'budget_id', 'id');
    }

    /**
     * HasOne relations with BudgetAnswer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answers()
    {
        return $this->hasOne(config('catalog.budget_answer'));
    }
}