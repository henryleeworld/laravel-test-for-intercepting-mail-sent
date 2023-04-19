@component('mail::message')
# {{ __('Welcome') }}

{{ __('Hi,') }}

{{ __('Welcome to Henry World. We’re thrilled to see you here!') }}

{{ __('We’re confident that Henry World will help you test for intercepting mail sent.') }}

{{ __('Thanks,') }}<br>
{{ config('app.name') }}
@endcomponent
