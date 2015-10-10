@if( $errors->has($name) )
        <div class="alert alert-danger" role="alert">
            <span><i class="fa fa-exclamation-circle"></i></span>
            <span class="sr-only">Error:</span>
            {{ $errors->first($name) }}
        </div>
@endif