<?php

namespace Snaketec\Http\Requests\Backend\Access\User;

use Snaketec\Http\Requests\Request;

/**
 * Class ManageUserRequest.
 */
class ManageUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('manage-users');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}