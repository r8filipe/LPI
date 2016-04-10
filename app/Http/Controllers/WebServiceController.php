<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class WebServiceController extends Controller
{
    public function report()
    {
        $data = Input::all();

        $file1 = 'form.txt';
        $test = json_encode($data);

        file_put_contents($file1, utf8_encode($test), FILE_APPEND | LOCK_EX);

    }
}
