<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\MediaVideo;

class GalleryController extends Controller
{
    // Handles /gallery-image/{years}
    public function show()
    {
        // Get all unique years for the filter/tabs
        $allYears = Gallery::select('title')
            ->distinct()
            ->orderBy('title', 'desc')
            ->pluck('title');
        // dd($allYears);
        // // Filter by year if provided, otherwise get all
        // if ($years && $years !== 'all') {
        //     $galleries = Gallery::where('title', $years)->latest()->get();
        // } else {
        $galleries = Gallery::latest()->get();
        // }

        return view('frontend.pages.gallery-image', compact('allYears', 'galleries'));
    }

    public function index()
    {
        $videos = MediaVideo::latest()->get();
        foreach ($videos as $video) {

            $url = $video->youtube_url;

            // Extract video ID from any YouTube format
            preg_match(
                '/(youtu\.be\/|v=|embed\/|shorts\/)([A-Za-z0-9_-]+)/',
                $url,
                $match
            );

            $videoId = $match[2] ?? null;

            $video->embed_url = $videoId
                ? "https://www.youtube.com/embed/" . $videoId
                : null;
        }

        return view('frontend.pages.gallery-video', compact('videos'));
    }


    // Handles /gallery-image/{slug}
    public function getGallery()
    {
        $galleries = Gallery::latest()->get();

        return response()->json($galleries);
    }
}
