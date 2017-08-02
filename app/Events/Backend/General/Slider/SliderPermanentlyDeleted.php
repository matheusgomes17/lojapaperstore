<?php

namespace Snaketec\Events\Backend\General\Slider;

use Snaketec\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class SliderPermanentlyDeleted
 */
class SliderPermanentlyDeleted extends Event
{
	use SerializesModels;

	/**
	 * @var $slider
	 */
	public $slider;

	/**
	 * @param $slider
	 */
	public function __construct($slider)
	{
		$this->slider = $slider;
	}
}