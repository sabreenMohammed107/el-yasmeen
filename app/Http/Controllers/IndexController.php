<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Counter;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Gallery_category;
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
        $galleries=Gallery::get();
        $categories = Gallery_category::all();
        $feedbacks=Feedback::where('active',1)->get();
                return view('gallery',compact('galleries','categories','feedbacks'));

    }


    public function blogs(){

        $blogs=Blog::orderBy('created_at', 'asc')->paginate(6);
        $latestPlogs = Blog::take(4)->orderBy("created_at", "desc")->get();
        $services=Service::take(4)->orderBy('id', 'DESC')->get();
        return view('blogs',compact('blogs','latestPlogs','services'));

    }


    public function singleBlog($id){
        $blog=Blog::where('id', $id)->first();

        $blogs=Blog::orderBy('created_at', 'asc')->get();
        $latestPlogs = Blog::take(4)->orderBy("created_at", "desc")->get();
        $services=Service::take(4)->orderBy('id', 'DESC')->get();
        return view('single-blog',compact('blog','blogs','latestPlogs','services'))->withCanonical($blog->url);
    }

    public function fetch_data(Request $request)
    {

        if ($request->ajax()) {
            $blogs=Blog::orderBy('created_at', 'asc')->paginate(6);

            return view('blogList', compact('blogs'))->render();
        }
    }


    public function sendMessage(Request $request){
        Message::create($request->except('_token'));
        session()->flash('success','شكرا على رسالتك سيتم التواصل معك قريبا');

        return redirect()->back()->with('success', 'شكرا على رسالتك سيتم التواصل معك قريبا');

    }
}
