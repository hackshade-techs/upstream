<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:255',
            'email' => 'required|min:2|max:255',
            'phone' => 'min:2|max:255',
            'subject' => 'min:2|max:255',
            'message' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
