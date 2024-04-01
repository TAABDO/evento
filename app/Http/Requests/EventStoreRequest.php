<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Change this based on your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'title' => 'sometimes|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required',
            'availablePlaces' => 'required',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'status' => 'sometimes|string|in:cancelled,confirmed,pending',
            'isAuto' => 'sometimes|in:auto,manual',
            'category_id' => 'required|exists:categories,id',

        ];
    }
}
