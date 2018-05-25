<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'busNumber' => 'required',
            'driverName' => 'required',
            'driverNumber' => 'required',
            'driverCnic' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'busNumber.required' => "Bus number field can't be empty!",
            'driverName.required' => "Driver field can't be empty!",
            'driverNumber.required' => "Driver number field can't be empty!",
            'driverCnic.required' => "Driver CNIC field can't be empty!",
        ];
    }
}
