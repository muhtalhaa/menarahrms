<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'position_id' => ['required', 'numeric', 'digits_between:1,15'],
            'hub_id' => ['required', 'numeric', 'digits_between:1,15'],
            'division_id' => ['required', 'numeric', 'digits_between:1,15'],
            'salary_id' => ['required', 'numeric', 'digits_between:1,15'],
            'workday_id' => ['required', 'numeric', 'digits_between:1,15'],
            'name' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'numeric', 'digits_between:16,16'],
            'email' => ['required', 'string', 'email:dns', 'unique:users,email', 'max:255'],
            'joined_at' => ['required', 'date_format:Y-m-d'],
            'inactive_at' => ['required', 'date_format:Y-m-d'],
        ];
    }
}