<a href="{{route('admin.page.active', $page->id )}}"><i class="fa {{ $page->active? 'fa-eye' : 'fa-eye-slash' }}"></i></a>&nbsp;
<a href="" class="disabled"><i class="fa fa-edit"></i></a>&nbsp;
<a href="{{route('admin.page.create', [ 'parent' => $page->id ])}}"><i class="fa fa-caret-square-o-right"></i></a>&nbsp;
<a href="{{route('admin.page.create', [ 'parent' => $main->id ])}}"><i class="fa fa-caret-square-o-down"></i></a>&nbsp;
<a href="" class="disabled"><i class="fa fa-trash-o"></i></a>