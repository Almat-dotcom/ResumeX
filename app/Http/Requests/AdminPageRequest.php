<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPageRequest extends FormRequest
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
        return
            [
                'name'=>'required',
                'surname'=>'required',
                'specialty'=>'required',
                'iin'=>'required',
                'gpa'=>'required',
                'year_from'=>'required',
                'year_to'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'experience'=>'required'
            ];
    }
//    public function messages(){
//        return[
//            'name.required'=>'Поле имя явлется обзательным',
//            'email.required'=>'Поле емайл явлется обзательным',
//            'subject.required'=>'Поле обьект явлется обзательным'
//        ];
//    }
}
