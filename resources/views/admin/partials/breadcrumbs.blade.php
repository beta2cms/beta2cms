<ol class="breadcrumb">
    @foreach($items as $key=>$item)
        <li {{ $item == end($items) ? 'class="active"': '' }}>
            @if($key == 0)
                <i class="fa fa-{{$icon}}"></i>&nbsp;
            @endif

            @if($item != end($items))
                    <a href="{{ $item['route'] }}">
            @endif

                {{ $item['name'] }}

            @if($item != end($items))
                </a>
            @endif
        </li>
    @endforeach
</ol>


{{--@include('admin.partials.breadcrumbs', [--}}
    {{--'icon' => 'dashboard',--}}
    {{--'items' => [--}}
        {{--[--}}
            {{--'route' => '#',--}}
            {{--'name' => 'A'--}}
        {{--],--}}
         {{--[--}}
            {{--'route' => '#',--}}
            {{--'name' => 'B'--}}
        {{--],--}}
         {{--[--}}
            {{--'route' => '#',--}}
            {{--'name' => 'Dashboard'--}}
        {{--]--}}
    {{--]--}}
{{--] )--}}