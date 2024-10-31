<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Number;
use Illuminate\Http\Request;

class NumbersController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'contact_id' => 'required',
            'number' => 'required|numeric',
        ]);

        Number::create($data);

        return redirect()->back();
    }
}
