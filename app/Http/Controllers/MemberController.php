<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salescustomers;

class MemberController extends Controller
{
    //
    function show()
    {
        $data =  salescustomers::whereBetween('customer_id',[241,260])->get();
        return view('list', ['members'=>$data]);
    }
}
