<x-mail::message>
# New Message via Portfolio Contact Form

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Subject:** {{ $data['subject'] }}

**Message:**

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>