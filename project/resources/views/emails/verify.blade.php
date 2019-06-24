@extends('emails.layouts.main')

@section('content')
    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
        <h1 align="center">@lang('email.welcome')</h1>

        @component('emails.layouts._partials.text')
            @lang('email.verify.button_below')
        @endcomponent

        @include('emails.layouts._partials.button', [
            'url' => $url,
            'label' => __('email.verify.button'),
        ])

        @component('emails.layouts._partials.text')
            @lang('email.verify.copy_link_below')<br />
            <a href="{{ $url }}" style="word-break: break-all;">
                {{ $url }}
            </a>
        @endcomponent

        @component('emails.layouts._partials.text')
            @lang('email.regards')
        @endcomponent
    </td>
@endsection
