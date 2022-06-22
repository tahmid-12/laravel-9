<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\devices;

class DeviceController extends Controller
{
    function list()
    {
        return devices::all();
    }
}
