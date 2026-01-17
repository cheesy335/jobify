<x-mail::message>
<p>
    {{ $user->name }} has applied for your {{ $job->title }} job,
    you can email them for further enquires to {{ $user->email }}.
</p>
<x-mail::button :url="'/'">
Go to Jobify
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
