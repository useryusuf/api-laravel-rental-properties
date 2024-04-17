<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePropertyRequest extends FormRequest
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
            'description' => 'required|string',
            'price' => 'required|numeric|min:100',
            'deposite' => 'required|numeric|min:0',
            'space' => 'required|numeric|min:10',
            'cityId' => 'required|exists:cities,id',
            'address' => 'required|string',
            'rentingType' => 'required|in:monthly,daily,yearly',
            'readyDate' => 'required|date',
            'rooms' => 'required|integer|min:1',
            'baths' => 'required|integer|min:1',
            'categoryId' => 'required|exists:categories,id',
            'userId' => 'required|exists:users,id',
            'features' => 'sometimes|in:garage,roof, internet, pool, fireplace, garden, balcony',
        ];
    }
    protected function prepareForValidation()
    {
        $fields = [
            'city_id' => $this->cityId,
            'renting_type' => $this->rentingType,
            'ready_date' => $this->readyDate,
            'user_id' => $this->userId,
            'category_id' => $this->categoryId,
        ];

        $this->merge($fields);
    }
}
