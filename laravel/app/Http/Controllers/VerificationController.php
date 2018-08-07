<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('emails.verification', $request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        //dd($request);
        $user = User::findorfail($request->id);

        if ($user->hash == $request->hash) {
            self::store($request);
            return redirect('/ThankYou');
        } else {
            return view('members.NotAuthorized', compact('user', $user));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')
            ->where('id', $request->id)
            ->update(['activated' => 1]);
    }
    
}