<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Scope;
use Illuminate\Support\Facades\DB;

/**
 * Trait BudgetScope.
 */
trait BudgetScope
{
    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('status', $status);
    }
}