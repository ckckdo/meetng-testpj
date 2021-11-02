<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meetingtest;

class MeetingtestController extends Controller
{
    public function index()
    {
        $items = Meetingtest::all();
        return view('index', ['items' => $items]);
    }

    public function send(Request $request)
    {
        $items=$request->all();
        Meetingtest::create($items);
        return view('thanks');
    }
}
