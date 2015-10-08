<li class="message-preview">
    <a href="{{ isset($route)? route($route) : '#' }}">
        <div class="media">
            <span class="pull-left">
                <img class="media-object" src="{{ $image }}" alt="">
            </span>
            <div class="media-body">
                <h5 class="media-heading">
                    <strong>{{ $name  }}</strong>
                </h5>
                <p class="small text-muted">
                    <i class="fa fa-clock-o"></i>
                       {{ $time }}
                </p>
                <p> {{ $message }}</p>
            </div>
        </div>
    </a>
</li>
