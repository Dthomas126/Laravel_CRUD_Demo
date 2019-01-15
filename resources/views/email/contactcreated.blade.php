@component('mail::message')


<p>Name: {{ $contact->name }}</p>
<p>Email: {{ $contact->email }}</p>
<p>Phone: {{ $contact->phone }}</p>
<p>Message:</p>
<p>{{ $contact->message }}</p>





Thanks,<br>
{{ config('app.name') }}
@endcomponent
