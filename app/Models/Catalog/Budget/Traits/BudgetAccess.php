<?php

namespace Snaketec\Models\Catalog\Budget\Traits;

use Carbon\Carbon;

/**
 * Class BudgetAccess.
 */
trait BudgetAccess
{
	public function getShelfLife()
	{
		$date = Carbon::parse($this->attributes['created_at'])->addMonths(1);
		return date('d/m/Y', strtotime($date));
	}
}