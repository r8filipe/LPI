<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Requests;

class WebserverController extends Controller
{
    public function report()
    {
        $data = Input::all();
        $rules = $this->rules();
        $messages = $this->messages();
        $file1 = 'form.txt';
        $test = json_encode($data);

        file_put_contents($file1, utf8_encode($test), FILE_APPEND | LOCK_EX);
        $validator = Validator::make($data, $rules, $messages);
        if (!$validator->fails()) {

            $file1 = 'form.txt';
            $test1 = 'entrou \n';
            file_put_contents($file1, utf8_encode($test), FILE_APPEND | LOCK_EX);

            $event = new Event;
            $event->lat = $data['coordenadas'];
            $event->long = $data['coordenadas'];
            $event->sub_category_id = $data['subcategoria'];
            $event->local_type_id = $data['local'];
            $event->address = $data['rua'];

            $event->save();
            $event_id = $event->id;

            return response()->json(['message' => 'Evento inserido com sucesso', 'state' => 'OK', 'id' => $event_id]);
        } else {
            $file1 = 'form.txt';
            $test1 = $validator->errors() . '\n';
            file_put_contents($file1, utf8_encode($test1), FILE_APPEND | LOCK_EX);
            return response()->json(['message' => $validator->errors(), 'state' => 'FAIL']);
        }
    }

    public function rules()
    {
        return [
            'categoria' => 'required|integer',
            'coordenadas' => 'required',
            'local' => 'required',
            'rua' => 'required',
            'subcategoria' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.'
        ];
    }
}
