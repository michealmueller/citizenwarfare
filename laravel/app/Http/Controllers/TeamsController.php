<?php

namespace App\Http\Controllers;

use Auth;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateTeamRequest;

use App\Http\Controllers\RssController as Rss;

/**
 * Class TeamsController
 * @package App\Http\Controllers
 */
class TeamsController extends Controller
{
    private $rss;
    private $data;

    public function __construct()
    {
        $this->rss = new Rss;
        $this->data = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data = [
            'user' => Auth::user(),
            'feeddata' => $this->rss->fetch(3),
        ];
        return view('team-registration')->with('data', $this->data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return $this
     */
    public function create(Request $request)
    {
        Team::create([
            'team_name'     => $request->team_name,
            'user_id'       => Auth::id(),
            'team_website'  => $request->team_website,
        ]);

        session()->put('success', 'team created!');

        return redirect('team-control');
    }

    public function controlpanel()
    {
        dd($team_id = $this->data['user']->team_id);
    }

    /**
     * @param \App\Http\Requests\CreateTeamRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateTeamRequest $request)
    {

    }

    /**
     * @param \App\Team $team
     */
    public function show(Team $team)
    {
        //

        return view('teamcontrolpanel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }

    /**
     *
     * A Team is owned by a user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user($method, $parameters)
    {
        return $this->belongsTo('App\User');
    }
}
