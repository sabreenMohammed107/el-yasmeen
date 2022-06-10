<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Counter;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Slider_image;
use App\Models\Why_us;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $homeSliders = Slider_image::where('active',1)->get();
        $whyRows = Why_us::limit(4)->get();
        $services = Service::get();
        $counters = Counter::limit(4)->get();
        $feedbacks=Feedback::where('active',1)->get();
        $gallery=Gallery::limit(4)->get();
        $blogs=Blog::all();
        return view('index', compact('homeSliders','whyRows','services','counters','feedbacks','gallery','blogs'));
    }

    public function gallery(){
        return view('gallery');
    }


    public function sendMessage(Request $request){
        Message::create($request->except('_token'));
        session()->flash('success','شكرا على رسالتك سيتم التواصل معك قريبا');

        return redirect()->back()->with('success', 'شكرا على رسالتك سيتم التواصل معك قريبا');

    }
}
