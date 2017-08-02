<?php

namespace Snaketec\Models\General\Slider\Traits\Mutator;

/**
 * Trait SliderMutator.
 */
trait SliderMutator
{
    /**
     * @param  string $value
     * @return string
     */
    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }
}