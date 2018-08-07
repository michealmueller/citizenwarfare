@component('mail::message')
Thank You for Registering at SCA, {{ $user->name }}

@component('mail::panel')
To verify you're account you need to click the button below, then you will be able to login.
    @component('mail::button', ['url' => 'sca.app/verify/'.$user->hash.'/'.$user->id])
        Verify You're Account Now!
    @endcomponent
@endcomponent


Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
