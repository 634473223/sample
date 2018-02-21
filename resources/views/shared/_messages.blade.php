@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
                @if(isset($user))
                {{ $user->name }}
                @endif
            </p>
        </div>
    @endif
@endforeach