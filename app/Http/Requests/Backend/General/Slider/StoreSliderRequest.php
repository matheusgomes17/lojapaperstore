<?php

namespace Snaketec\Http\Requests\Backend\General\Slider;

use Snaketec\Http\Requests\Request;

/**
 * Class StoreSliderRequest.
 */
class StoreSliderRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('manage-general');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }
}