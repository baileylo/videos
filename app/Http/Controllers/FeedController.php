<?php

namespace App\Http\Controllers;

use App\Video;
use App\Http\Requests;

class FeedController extends Controller
{
    public function index()
    {
        return view('lists.homepage', ['videos' => Video::paginate(12)]);
    }
}
