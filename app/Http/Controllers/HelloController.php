<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index() {
        $data = [
            ['name'=> 'Yamada', 'email'=> 'yamada@taro'],
            ['name'=> 'hanako', 'email'=> 'hanako@flower'],
            ['name'=> 'sachiko', 'email'=> 'sachiko@happy']
        ];
        return view('hello.index', ['data'=>$data]);
    }
}
