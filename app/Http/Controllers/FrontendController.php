<?php

namespace App\Http\Controllers;

use App\Models\MediaVideo;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\StudyMaterial;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class FrontendController extends Controller
{
    //
    public function index()
    {
        $videos = MediaVideo::limit(3)->latest()->get();


        foreach ($videos as $video) {
            $url = $video->youtube_url;


            preg_match('/(youtu\.be\/|v=|embed\/|shorts\/)([A-Za-z0-9_-]+)/', $url, $match);


            $videoId = $match[2] ?? null;


            $video->embed_url = $videoId
                ? "https://www.youtube.com/embed/" . $videoId
                : null;
        }
        $banners = Banner::orderBy('created_at', 'desc')->get();
        $materials = StudyMaterial::latest()->limit(4)->get();
        $gallery = Gallery::latest()->limit(6)->get();
       
        return view('frontend.pages.index', compact('videos', 'banners', 'materials', 'gallery'));
    }

    public function landing(Request $request, $slug)
    {
        $page = Page::where('url_slug', $slug)->first();
        if (!$page) {
            abort(404);
        }
        $services = Service::where('status', 1)->get();
        return view('frontend.landing-pages.final-landingpage', compact('services', 'page'));
    }

    public function serviceDetail($slug)
    {

        $service = Service::where('url_slug', $slug)->firstOrFail();
        $ser_category = $service->name;
        $category = null;
        $category = strtolower(str_replace(' ', '', $ser_category));
        $pages = Page::where('status', 1)->whereRaw('LOWER(REPLACE(category, " ", "")) = ?', [$category])->get();
        return view('frontend.landing-pages.service-detail', compact('service', 'pages'));
    }

    public function enquiryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:7,15',
            'message' => 'required|string|max:1000',
            'subject' => [
                'required',
                'min:5',
                'max:1000',
                'not_regex:/<[^>]*>/'
            ],
            'captcha' => 'required|numeric'
        ]);
        // Check math captcha
        if ((int)$request->captcha !== session('math_captcha')) {
            return response()->json([
                'status' => false,
                'errors' => [
                    'captcha' => ['Wrong answer']
                ]
            ], 422);
        }

        // clear captcha
        session()->forget('math_captcha');
        Enquiry::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'type'    => $request->type,
        ]);

        try {
            $to = "gowtham.webbitech@gmail.com";

            Mail::send([], [], function ($message) use ($validated, $request, $to) {

                $message->to($to)
                    ->from('sales@intellectaqua.com', 'Arunai Solutions')
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('New Enquiry Received')
                    ->html("
                    <h2>New Enquiry</h2>
                    <p><strong>Name:</strong> {$validated['name']}</p>
                    <p><strong>Email:</strong> {$validated['email']}</p>
                    <p><strong>Phone:</strong> {$validated['phone']}</p>
                    <p><strong>Subject:</strong> {$validated['subject']}</p>
                    <p><strong>Message:</strong> {$validated['message']}</p>
                    <p><strong>Type:</strong> {$request->type}</p>
                ");
            });

            Mail::send([], [], function ($message) use ($validated) {

                $message->to($validated['email'])
                    ->from('sales@intellectaqua.com', 'Arunai Solutions')
                    ->subject('Thank You for Your Enquiry')
                    ->html("
                    <p>Hi {$validated['name']},</p>
                    <p>Thank you for contacting us. We have received your enquiry and will get back to you soon.</p>
                    <br>
                    <p><strong>Your Subject:</strong></p>
                    <p>{$validated['subject']}</p>
                    <p><strong>Your Message:</strong></p>
                    <p>{$validated['message']}</p>
                ");
            });
        } catch (\Throwable $e) {
            Log::error('Mail Error: ' . $e->getMessage());
        }

        return response()->json([
            'status' => true,
            'message' => 'Your enquiry has been submitted successfully!'
        ]);
    }
}
