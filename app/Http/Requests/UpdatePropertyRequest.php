<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return
                [
                    'description' => 'required|string',
                    'price' => 'required|numeric|min:100',
                    'deposite' => 'required|numeric|min:0',
                    'space' => 'required|numeric|min:10',
                    'cityId' => 'required|exists:cities,id',
                    'address' => 'required|string',
                    'rentingType' => 'required|in:monthly,daily,yearly',
                    'readyDate' => 'required|date',
                    'rooms' => 'required|integer|min:1',
                    'categoryId' => 'required|exists:categories,id',
                    'userId' => 'required|exists:users,id',
                ];
        } else {
            return [
                'description' => 'sometimes|required|string',
                'price' => 'sometimes|required|numeric|min:100',
                'deposite' => 'sometimes|required|numeric|min:0',
                'space' => 'sometimes|required|numeric|min:10',
                'cityId' => 'sometimes|required|exists:cities,id',
                'address' => 'sometimes|required|string',
                'rentingType' => 'sometimes|required|in:monthly,daily,yearly',
                'readyDate' => 'sometimes|required|date',
                'rooms' => 'sometimes|required|integer|min:1',
                'categoryId' => 'sometimes|required|exists:categories,id',
                'userId' => 'sometimes|required|exists:users,id',
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->postalCode) {
            $this->merge([
                'city_id' => $this->cityId,
                'renting_type' => $this->rentingType,
                'ready_date' => $this->readyDate,
                'user_id' => $this->userId,
                'category_id' => $this->categoryId,
            ]);
        }
    }
}
