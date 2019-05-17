<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DLCRequest extends FormRequest
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
            'name'  => 'required|min:3',
            'desc_dlc' => 'required|min:3',
            'id_game' => 'required',
            //
        ];
    }
}
