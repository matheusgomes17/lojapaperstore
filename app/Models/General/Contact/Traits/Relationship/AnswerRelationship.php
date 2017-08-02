<?php

namespace Snaketec\Models\General\Contact\Traits\Relationship;

/**
 * Trait AnswerRelationship.
 */
trait AnswerRelationship
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(config('catalog.user'), 'id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contacts()
    {
        return $this->belongsTo(config('general.contact'), 'contact_id', 'id');
    }
}
