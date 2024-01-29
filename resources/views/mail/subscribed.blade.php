<x-mail::message>
# Introduction

{{ implode(', ', $topics)}}

<x-mail::button :url="$link">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
