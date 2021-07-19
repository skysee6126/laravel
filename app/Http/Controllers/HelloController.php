<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request) {

        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'There is some issue in a query';
        } else {
            $msg = 'ID/PASS are received. Please fill out the form';
        }
        return view('hello.index', ['msg'=>$msg, ]);
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];

        $messages = [
            'name.required' => '이름을 반드시 입력해주세요',
            'mail.email' => '메일주소를 반드시 입력해주세요',
            'age.numeric' => '연령은 정수를 입력해주세요',
            'age.min' => '연령은 0이상의 숫자를 입력해주세요',
            'age.max' => '연령은 150 이하의 숫자를 입력해주세요',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->sometimes('age', 'min:0', function($input){
            return is_numeric($input->age);
        });
        $validator->sometimes('age', 'max:150', function($input){
            return is_numeric($input->age);
        });
        
        if ($validator->fails()){
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }
        return view('hello.index', ['msg'=>'there is no issue!']);
    }

}
