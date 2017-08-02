<?php

namespace Snaketec\Models\Access\User\Traits\Relationship;

use Snaketec\Models\Access\User\SocialLogin;

/**
 * Trait UserRelationship.
 */
trait UserRelationship
{
    /**
     * Many-to-Many relations with Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(config('access.role'), config('access.role_user_table'), 'user_id', 'role_id');
    }

    /**
     * @return mixed
     */
    public function providers()
    {
        return $this->hasMany(SocialLogin::class);
    }

    /**
     * BelongsTo relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgets()
    {
        return $this->hasMany(config('catalog.budget'));
    }

    /**
     * BelongsTo relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(config('catalog.product'));
    }
}
