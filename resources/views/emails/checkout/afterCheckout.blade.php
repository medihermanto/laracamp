@component('mail::message')
# Thank you!
Hai, {{ $checkout->User->name }}
Thank you for register on <b>{{ $checkout->Camp->title }}</b> course, please ee the payment instruction by click button below

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
