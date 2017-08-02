<?php

namespace Snaketec\Models\General\Contact\Traits\Scope;
use Illuminate\Support\Facades\DB;

/**
 * Trait AnswerScope.
 */
trait AnswerScope
{
    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('status', $status);
    }
}