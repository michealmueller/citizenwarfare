<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\RssController as Rss;


class ProfileController extends Controller
{
    private $user;
    private $data;
    private $rss;

    public function __construct()
    {
        $this->user = new User;
        $this->rss = new Rss;
        $this->data = [
            'feeddata'  => $this->rss->fetch(3),
            'comments'  => null,
            'team'      => null,
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Auth::check()){
            return route('login');
        }

        $this->data['user'] = Auth::user();
        $regDate = Carbon::parse($this->data['user']->created_at);
        if($regDate->year < 2019){
            $this->data['user']->founder = true;
        }
        if($this->data['user']->card_brand != null){
            $this->data['user']->subscriber = true;
        }

        return view('main')->with('data', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        if(Auth::check())
        {
            $user = Auth::user();
        }

        if(!$request->hasFile('avatar')) {
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->organization = $request['organization'];
            $user->web = $request['web'];
            $user->password = bcrypt($request['password']);
        }

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Storage::disk('avatars')->put($filename, $avatar);
            //Image::make($avatar)->save(storage_path('avatars' . Auth::user()->id . $filename));
            //file_put_contents(storage_path('avatars/' . Auth::user()->id . $filename), $avatar);
            $user->avatar = storage_path('avatars/'. Auth::user()->id . $filename);
        }
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
