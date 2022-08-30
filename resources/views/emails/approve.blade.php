@component('mail::message')
# Introduction

# Your account has been Approved

@component('mail::button', ['url' => route('login')])
    Please Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
