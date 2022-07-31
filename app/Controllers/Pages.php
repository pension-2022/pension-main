<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dpensiOn || Home'
        ];
        return view('pages/index', $data);
    }
    public function detail()
    {
        $data = [
            'title' => 'dpensiOn || Article'
        ];
        return view('pages/article/detail', $data);
    }
    public function category()
    {
        $data = [
            'title' => 'dpensiOn || Category'
        ];
        return view('pages/article/category', $data);
    }
}