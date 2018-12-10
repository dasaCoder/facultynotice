<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function create(Request $request)
    {
        $request->_token = null;
        $notice = new Notice($request->all());

        $notice->save();

        return redirect()->back();
    }

    public function get($depId)
    {
        $notice = Notice::where('department_id','=',$depId)->get();

        return $notice;
    }
}
