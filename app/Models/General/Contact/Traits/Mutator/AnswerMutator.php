<?php

namespace Snaketec\Models\General\Contact\Traits\Mutator;

/**
 * Trait AnswerMutator.
 */
trait AnswerMutator
{
    /**
     * @param  string $value
     * @return string
     */
    public function getMessageAttribute($value)
    {
        return ucfirst($value);
    }
}