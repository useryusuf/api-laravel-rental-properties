<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
                    'firstname' => 'required|min:2|max:25',
                    'lastname' => 'required|min:2|max:25',
                    'email' => 'required|email|unique:users,email'
                ];
        } else {
            return [
                'firstname' => 'sometimes|min:2|max:25',
                'lastname' => 'sometimes|min:2|max:25',
                'email' => 'sometimes|email|unique:users,email',
                'phone1' => 'sometimes|string|digits:10',
                'phone2' => 'sometimes|string|digits:10',
                'name' => 'sometimes|string|max:50|unique:users,email',
                'address' => 'sometimes|string|max:255|min:15',

            ];
        }
    }
}
