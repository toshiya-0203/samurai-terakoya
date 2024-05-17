<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index() {
        $name = '侍太郎';
        $languages = ['PHP', 'CSS', 'JavaScript', 'PHP'];

        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));
    }
}
