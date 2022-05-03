<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'required|string',
            'phone' => 'required', //TODO: better phone number validation
            'order_total' => 'required|numeric',
            'address' => 'required'
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
        }
        return [];
    }
}
