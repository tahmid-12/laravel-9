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

    function add(Request $req){
        $devices = new devices;
        $devices->name = $req->name;
        $devices->member_id = $req->member_id;
        $result = $devices->save();
        if($result){
            return ["result" => "Data Stored Successfully"];
        }else{
            return ["result" => "Data Failed posting"];
        }
    }
}
