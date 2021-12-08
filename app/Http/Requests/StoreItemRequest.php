<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'column_id' => 'required',
            'order' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute is required'
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'column_id' => 'Column Identifier',
            'order' => 'Order',
        ];
    }
}
