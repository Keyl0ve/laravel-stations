<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PracticeController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function sample()
    {
        return response('practice');
    }

    public function sample2()
    {
        $test = 'practice2';
        return response($test);
    }

    public function sample3()
    {
        $test = 'test';
        return response($test);
    }
}
