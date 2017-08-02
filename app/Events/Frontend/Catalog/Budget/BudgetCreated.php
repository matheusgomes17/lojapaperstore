<?php

namespace Snaketec\Events\Frontend\Catalog\Budget;

use Snaketec\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class BudgetCreated.
 */
class BudgetCreated extends Event
{
    use SerializesModels;

    /**
     * @var
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
