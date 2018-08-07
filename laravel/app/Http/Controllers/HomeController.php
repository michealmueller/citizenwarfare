<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RssController as Rss;

class HomeController extends Controller
{
    private $data;
    private $rss;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->rss = new Rss;
        //TODO::move to background
        $this->rss->store();
        $this->data = [
            'feeddata' => $this->rss->fetch(3),
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $this->data['user'] = Auth::user();
            $posts = DB::table('posts')->get();
            return view('home2')->with(['posts' => $posts, 'data' => $this->data]);
        }

        $posts = DB::table('posts')->get();

        //dd($this->data['feeddata']);
        return view('home2')->with('posts', $posts)->with('data', $this->data);
    }
    public function ComingSoon()
    {
        return view('comingsoon');
    }

    public function Newsletter(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:newsletter,email',
            'name' => 'required',
        ]);

        $email = $request->newsletteremail;
        $name = $request->name;

        $newsletter = DB::table('newsletter')->insert([
            'email' => $email,
            'name' => $name,
        ]);

        if($newsletter){
            session(['reged' => true]);
            return view('comingsoon');
        }

        return back()->with('data', $this->data);

    }

    public function Privacy()
    {
        //dd($this->data);
        return view('privacy')->with('data', $this->data);
    }
    public function Terms()
    {
        return view('terms')->with('data', $this->data);
    }
}
