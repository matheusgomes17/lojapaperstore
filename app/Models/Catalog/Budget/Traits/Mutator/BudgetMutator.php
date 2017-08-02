<?php

namespace Snaketec\Models\Catalog\Budget\Traits\Mutator;

/**
 * Trait BudgetMutator.
 */
trait BudgetMutator
{
	public function getCreatedAtAttribute($value)
	{
		return date('d/m/Y H:i:s', strtotime($value));
	}
}