<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'text' => [
                'sometimes',
                'string',
                'max:750',
            ],

            'rating' => [
                    'sometimes',
                    'numeric',
                    'max:5',
                    'min:1',
            ],

            'resto_id' => [
                'sometimes',
                'numeric',
                'exists:restos,id',
            ],
        ];
    }
}
