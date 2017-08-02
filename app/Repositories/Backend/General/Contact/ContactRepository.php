<?php

namespace Snaketec\Repositories\Backend\General\Contact;

use Snaketec\Models\General\Contact\Contact;
use Snaketec\Repositories\Repository;

/**
 * Class ContactRepository.
 */
class ContactRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Contact::class;

    /**
     * @param int  $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 1)
    {
        $dataTableQuery = $this->query()
            ->select([
                config('general.contacts_table').'.id',
                config('general.contacts_table').'.name',
                config('general.contacts_table').'.email',
                config('general.contacts_table').'.subject',
                config('general.contacts_table').'.created_at',
                config('general.contacts_table').'.updated_at',
            ]);

        return $dataTableQuery->active($status);
    }
}