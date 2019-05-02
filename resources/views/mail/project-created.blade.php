@component('mail::message')
# New Project: 

Body Here

@component('mail::button', ['url' => '/login'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
