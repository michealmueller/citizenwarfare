<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\RssController as Rss;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    private $user;
    private $data;
    private $rss;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);

        $this->user = new User;
        $this->rss = new Rss;
        $this->data = [
            'feeddata' => $this->rss->fetch(3),
        ];
    }

    /**
     * @param $provider
     * @return mixed
     */
    public function redirectToProvider($provider)
    {
        //return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handleProviderCallback($provider)
    {
        /*$user = Socialite::driver($provider)->user();

        /$authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        //todo::create password for oath logins
        return redirect($this->redirectTo)->with('data', $this->data);*/
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = $this->user->where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return $this->user->create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }

    public function CreatePassword()
    {

    }
}
