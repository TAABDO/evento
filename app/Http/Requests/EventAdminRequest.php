<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'date' => 'sometimes|date',
            'location' => 'sometimes|string|max:255',
            'description' => 'sometimes',
            'availablePlaces' => 'sometimes',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'status' => 'sometimes|string|in:cancelled,confirmed,pending',
            'isAuto' => 'sometimes|string|in:Auto,Manual',
            'category_id' => 'sometimes|exists:categories,id',
        ];
    }
}
