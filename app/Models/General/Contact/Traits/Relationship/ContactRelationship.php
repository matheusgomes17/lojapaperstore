<?php

namespace Snaketec\Models\General\Contact\Traits\Relationship;

/**
 * Trait ContactRelationship.
 */
trait ContactRelationship
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function answers()
    {
        return $this->hasOne(config('general.answer'), 'contact_id', 'id');
    }
}
