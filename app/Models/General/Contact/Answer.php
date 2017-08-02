<?php

namespace Snaketec\Models\General\Contact;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Snaketec\Models\General\Contact\Traits\Attribute\ContactAttribute;
use Snaketec\Models\General\Contact\Traits\Mutator\AnswerMutator;
use Snaketec\Models\General\Contact\Traits\Relationship\AnswerRelationship;
use Snaketec\Models\General\Contact\Traits\Scope\AnswerScope;

/**
 * Class Answer.
 */
class Answer extends Model
{
    use Notifiable,
        ContactAttribute,
        AnswerMutator,
        AnswerRelationship,
        AnswerScope;

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
    protected $fillable = ['user_id', 'contact_id', 'message'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('general.contacts_answers_table');
    }
}
