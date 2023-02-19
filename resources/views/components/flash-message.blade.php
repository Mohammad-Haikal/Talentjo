@if (session()->has('message-sent'))
    <div class="bg-dark position-fixed fixed-bottom bottom-0 p-2 text-center text-white" id="flash-message" role="alert">
        <small class="text-light m-0">
            @if (session()->has('lang') && session('lang') == 'en')
                Your message has been sent. Thank you!
            @else
                تم ارسال رسالتك. شكرا!
            @endif
        </small>
    </div>
@endif
