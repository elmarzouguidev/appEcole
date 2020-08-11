<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingleEcoleRequest extends FormRequest
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
        if(request()->has('reviewEcole')&& request()->reviewEcole ==='dataOk'){
            return [
                'name'=>'required|string',
                'email'=>'required|email',
                'contentre'=>'required|string',
                'score'=>'required|string',
                'appEcole'=>'required|integer'
            ];
        }
        if(request()->has('emailEcole')&& request()->emailEcole ==='sendOk'){

            return [
                'name'=>'required|string',
              /*  'email'=>'required|email',
                'contentre'=>'required|string',
                'score'=>'required|string',
                'ecolemail'=>'required|email'*/
            ];
        }
    }
}
