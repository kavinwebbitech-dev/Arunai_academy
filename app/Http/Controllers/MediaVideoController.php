<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaVideo;

class MediaVideoController extends Controller
{
    public function index()
    {
        $videos = MediaVideo::latest()->get();

        foreach ($videos as $video) {
            $url = $video->youtube_url;

            preg_match('/(youtu\.be\/|v=|embed\/|shorts\/)([A-Za-z0-9_-]+)/', $url, $match);

            $videoId = $match[2] ?? null;

            $video->embed_url = $videoId
                ? "https://www.youtube.com/embed/" . $videoId
                : null;
        }

        return view('admin.pages.video', compact('videos'))->with('success', 'Video Added');
    }



    public function store(Request $request)
    {
        $request->validate([
            'youtube_url' => 'required'
        ]);

        MediaVideo::create([
            'youtube_url' => $request->youtube_url
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Video added successfully!'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'youtube_url' => 'required|url'
        ]);

        $video = MediaVideo::findOrFail($id);
        $video->youtube_url = $request->youtube_url;

        // Optional: regenerate embed_url from youtube_url
        $video->youtube_url = str_replace("watch?v=", "embed/", $request->youtube_url);

        $video->save();

        return response()->json([
            'success' => true,
            'message' => 'YouTube URL updated successfully!'
        ]);
    }

    public function destroy($id)
    {
        $video = MediaVideo::findOrFail($id);
        $video->delete();

        return response()->json([
            'success' => true,
            'message' => 'Video deleted successfully!'
        ]);
    }
}
