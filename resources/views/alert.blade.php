<div
    class="
        alert alert-{{ $severity }}
        {{ $class or '' }}
        @istrue($dismissible, 'alert-dismissible')
        @istrue($animate, 'fade show')
    "
    role="alert"
>
    @istrue($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endistrue

    {{ $slot }}
</div>