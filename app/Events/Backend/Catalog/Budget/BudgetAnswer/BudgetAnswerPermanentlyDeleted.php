<?php

namespace Snaketec\Events\Backend\Catalog\Budget\BudgetAnswer;

use Snaketec\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class BudgetAnswerPermanentlyDeleted 
 */
class BudgetAnswerPermanentlyDeleted extends Event
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