<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    function getData()
    {
        return [
            "name" => "Tahmid",
            "Designation" => "Software Engineer"
        ];
    }
}
