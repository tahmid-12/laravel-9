<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\devices;

class DeviceController extends Controller
{
    function list($id=null)
    {
        return $id?devices::find($id) : devices::all();
    }

    // function getID($id=null)
    // {
    //     return $id?devices::find($id) : devices::all();
    // }
}
