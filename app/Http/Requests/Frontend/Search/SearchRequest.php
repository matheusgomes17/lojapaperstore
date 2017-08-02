<?php

namespace Snaketec\Http\Requests\Frontend\Search;

use Snaketec\Http\Requests\Request;

/**
 * Class SearchRequest.
 */
class SearchRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'required',
        ];
    }
}
