<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfotransactionRequest extends FormRequest
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
            'amount' => 'required',
            'description' => 'required|max:30',
            'destinationFirstname' => 'required|max:33|min:2',
            'destinationLastname' => 'required|max:33|min:2',
            'destinationNumber' => 'required|max:26',
            'paymentNumber' => 'required|max:30',
            'reasonDescription' => 'required',
            'deposit' => 'required',
            'sourceFirstName' => 'required',
            'sourceLastName' => 'required',
            'secondPassword' => 'required',
        ];
    }
}
