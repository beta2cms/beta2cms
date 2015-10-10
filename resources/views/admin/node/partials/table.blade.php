@foreach($main->children as $key=>$node)
    <tr class="{{ !$node->active ? 'text-muted' : ''}}">
        <th scope="row">{{ ++$key}}</th>
        <td colspan="2"><a href=""><i class="fa fa-caret-right"></i></a> {{ $node->name }}</td>
        <td>@include('admin.node.partials.admin')</td>
    </tr>

    @if(!empty($node->children->toArray()))
        @include('admin.node.partials.table', ['main' => $node , 'parent' => $key])
    @endif


@endforeach