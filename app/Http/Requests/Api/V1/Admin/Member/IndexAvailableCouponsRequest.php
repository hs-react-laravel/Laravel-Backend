<?php

namespace App\Http\Requests\Api\V1\Admin\Member;

use App\Http\Requests\Api\V1\Request as FormRequest;

class IndexAvailableCouponsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'page' => 'nullable|integer',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'page' => __('validation.page'),
        ];
    }
}