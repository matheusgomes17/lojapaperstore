<?php

namespace Snaketec\Http\Requests\Backend\Catalog\Budget;

use Snaketec\Http\Requests\Request;

/**
 * Class ManageBudgetAnswerRequest
 */
class ManageBudgetAnswerRequest extends Request
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
            //
        ];
    }
}