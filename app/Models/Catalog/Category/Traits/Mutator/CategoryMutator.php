<?php

namespace Snaketec\Models\Catalog\Category\Traits\Mutator;

/**
 * Trait CategoryMutator.
 */
trait CategoryMutator
{
    /**
     * @param  string $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    /**
     * @param  string $value
     * @return string
     */
    public function getDescriptionAttribute($value)
    {
        return ucfirst($value);
    }
}