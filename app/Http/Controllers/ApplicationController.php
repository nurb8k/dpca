<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;


class ApplicationController extends Controller
{
    public function store(Request $request)
    {
      $validated = $request->validate([
           'name' => 'required|string',
           'phone' => 'required',
           'message' => 'string|nullable'
        ],[
           'name.*' => 'Имя обязательно для заполнения',
           'phone.*' => 'Номер телефона обязательно для заполнения'
        ]);

        Application::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'message' => $request->message
        ]);
        return redirect()->back()->with('success',__('apply.message'));

    }
}
