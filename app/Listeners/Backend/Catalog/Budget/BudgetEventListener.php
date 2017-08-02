<?php

namespace Snaketec\Listeners\Backend\Catalog\Budget;

/**
 * Class BudgetEventListener
 */
class BudgetEventListener
{
	/**
	 * @var string
	 */
	private $history_slug = 'Cart';

	/**
	 * @param $event
	 */
	public function onCreated($event)
	{
		history()->log(
			$this->history_slug,
			'trans("history.backend.budgets.created") '.$event->budget->name,
			$event->budget->id,
			'plus',
			'bg-green'
		);
	}

	/**
	 * @param $event
	 */
	public function onUpdated($event)
	{
		history()->log(
			$this->history_slug,
			'trans("history.backend.budgets.updated") '.$event->budget->name,
			$event->budget->id,
			'save',
			'bg-aqua'
		);
	}
	/**
	 * @param $event
	 */
	public function onPermanentlyDeleted($event)
	{
		history()->log(
			$this->history_slug,
			'trans("history.backend.budgets.permanently_deleted") '.$event->budget->name,
			$event->budget->id,
			'trash',
			'bg-maroon'
		);
	}

	/**
	 * Register the listeners for the subscriber.
	 *
	 * @param  \Illuminate\Events\Dispatcher  $events
	 */
	public function subscribe($events)
	{
		$events->listen(
            \Snaketec\Events\Backend\Catalog\Budget\BudgetCreated::class,
            'Snaketec\Listeners\Backend\Catalog\Budget\BudgetEventListener@onCreated'
		);

		$events->listen(
            \Snaketec\Events\Backend\Catalog\Budget\BudgetUpdated::class,
            'Snaketec\Listeners\Backend\Catalog\Budget\BudgetEventListener@onUpdated'
		);

		$events->listen(
            \Snaketec\Events\Backend\Catalog\Budget\BudgetPermanentlyDeleted::class,
            'Snaketec\Listeners\Backend\Catalog\Budget\BudgetEventListener@onPermanentlyDeleted'
		);
	}
}