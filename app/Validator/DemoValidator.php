<?php

namespace App\Validator;

class DemoValidator
{
    public function index(): array
    {
        return [
            'rules' => [
                'name' => 'required|max:4',
                'age' => 'required|integer|min:1'
            ],
            //可选参数
            'messages' => [
                'required'=> '缺少参数:attribute', //支持的格式
                'max' => ':attribute过长',
                'min' => ':attribute太小'
            ],
            //可选参数
            'attributes' => [
                'name' => '姓名'
            ],
        ];
    }
}