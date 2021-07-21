<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Myrule;

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
            'age' => ['numeric', new Myrule(5)],
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => '이름을 반드시 입력해주세요',
            'mail.email' => '메일주소를 반드시 입력해주세요',
            'age.numeric' => '연령은 정수를 입력해주세요',
            'age.hello' => 'hello! 입력은 홀수만 입력 가능합니다',
        ];
    }

}
