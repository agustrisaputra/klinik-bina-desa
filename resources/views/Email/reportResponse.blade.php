@component('mail::message')
{!! $data['body'] !!}


Hormat Kami,<br>
{{ config('app.name') }}
@endcomponent
