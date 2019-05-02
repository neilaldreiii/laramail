@component('mail::message')
# New Project: 

Body Here

try
https://scotch.io/tutorials/ultimate-guide-on-sending-email-in-laravel

@component('mail::button', ['url' => 'projectowl.test'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
