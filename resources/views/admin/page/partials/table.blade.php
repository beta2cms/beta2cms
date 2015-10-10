@foreach($main->children as $key=>$page)
    <tr class="{{ !$page->active ? 'text-muted' : ''}}">
        <th scope="row">{{ ++$key }}</th>
        <td colspan="2"><a href=""><i class="fa fa-caret-right"></i></a> {{ $page->name }}</td>
        <td>@include('admin.page.partials.admin')</td>
    </tr>
    @if(!empty($page->children->toArray()))
        @include('admin.page.partials.table', ['main' => $page])
    @endif
@endforeach