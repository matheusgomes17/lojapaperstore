<?php

namespace Snaketec\Events\Backend\Catalog\Budget;

use Snaketec\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class BudgetPermanentlyDeleted
 */
class BudgetPermanentlyDeleted extends Event
{
	use SerializesModels;

	/**
	 * @var $budget
	 */
	public $budget;

	/**
	 * @param $budget
	 */
	public function __construct($budget)
	{
		$this->budget = $budget;
	}
}