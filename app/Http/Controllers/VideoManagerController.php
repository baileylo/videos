<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoManagerController extends Controller
{
    public function viewSubmitForm()
    {
        return view('manager.submit');
    }

    public function submitHandler(Request $request)
    {
        $statuses = implode(',', (new Video)->statuses);
        $sources = implode(',', (new Video)->sources);
        $this->validate($request, [
            'title' => 'required|string|between:2,255',
            'slug' => 'required|string|between:2,255|unique:videos,slug',
            'description' => 'string|min:2',
            'url' => 'required|url',
            'source_id' => 'required|string',
            'thumbnail' => 'required|url',
            'status' => "required|in:{$statuses}",
            'source' => "required|in:{$sources}",
        ]);

        $video = Video::create($request->only('title', 'slug', 'description', 'url', 'thumbnail', 'status', 'source', 'source_id'));

        return redirect(route('home'))->with('global_flash', 'Video added!');
    }
}