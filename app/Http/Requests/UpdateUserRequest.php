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
                    'firstname' => 'required|min:2|max:15',
                    'lastname' => 'required|min:2|max:15',
                    'email' => 'required|email|unique:users,email'
                ];
        } else {
            return [
                'firstname' => 'sometimes|required|min:2|max:15',
                'lastname' => 'sometimes|required|min:2|max:15',
                'email' => 'sometimes|required|email|unique:users,email'
            ];
        }
    }
}
