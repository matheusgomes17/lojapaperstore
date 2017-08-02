<?php

namespace Snaketec\Models\General\Contact;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Snaketec\Models\General\Contact\Traits\Attribute\ContactAttribute;
use Snaketec\Models\General\Contact\Traits\Mutator\ContactMutator;
use Snaketec\Models\General\Contact\Traits\Relationship\ContactRelationship;
use Snaketec\Models\General\Contact\Traits\Scope\ContactScope;

/**
 * Class Contact.
 */
class Contact extends Model
{
    use Notifiable,
        ContactAttribute,
        ContactMutator,
        ContactRelationship,
        ContactScope;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'subject', 'message'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('general.contacts_table');
    }
}
