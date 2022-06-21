@component('mail::message')
# Welcome!
Hi, {{ $user->name }} !
<br>
Welcome to our course, your account has been succesfully created, now you can choose the best course you want, enjoy your course.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
