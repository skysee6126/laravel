<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0, 150',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => '이름을 반드시 입력해주세요',
            'mail.email' => '메일주소를 반드시 입력해주세요',
            'age.numeric' => '연령은 정수를 입력해주세요',
            'age.between' => '연령은 0~150 사이의 숫자를 입력해주세요',
        ];
    }

}
