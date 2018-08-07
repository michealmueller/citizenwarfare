<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\RssController as Rss;

class PurchaseController extends Controller
{
    public $user;
    public $rss;
    public $data;

    public function __construct()
    {

        $this->rss = new Rss;
        $this->data = [
            'feeddata' => $this->rss->fetch(3),
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return the stripe form
        $this->data['user'] = Auth::user();
        return view('pricing')->with('data', $this->data);
    }

    public function CancelSubscriptionIndex()
    {
        return view('payments.CancelSubscription');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Subscribe(Request $request)
    {
        //
        $request->user()->newSubscription('main', 'Yearly')
            ->create($request->stripeToken,
                [
                    'email'=>$request->user()->email
                ]);
        return redirect('ThankYou');
    }

    public function RegComplete()
    {
        $userData = [
            'user'          => Auth::user(),
            'userDaysLeft'  => $this->profile->SubscriptionRemaining(Auth::id()),
        ];
        return view('payments.regcomplete')->with('data', $userData);
    }
    public function ThankYou()
    {
        $userData = [
            'user'          => Auth::user(),
            'userDaysLeft'  => $this->profile->SubscriptionRemaining(Auth::id()),
        ];

        return view('payments.thankyou')->with('data', $userData);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CancelSubscription(Request $request)
    {
        //Cancel the users Subscription
        $request->user()->subscription('main')->cancel();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
