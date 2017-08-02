<?php

namespace Snaketec\Models\General\Contact\Traits\Mutator;

/**
 * Trait ContactMutator.
 */
trait ContactMutator
{
    /**
     * @param  string $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * @param  string $value
     * @return string
     */
    public function getSubjectAttribute($value)
    {
        return ucfirst($value);
    }
}