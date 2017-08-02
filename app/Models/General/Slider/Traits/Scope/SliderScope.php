<?php

namespace Snaketec\Models\General\Slider\Traits\Scope;

use Illuminate\Support\Facades\DB;

/**
 * Trait SliderScope.
 */
trait SliderScope
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