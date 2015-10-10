<a href="{{route('admin.node.active', $node->id )}}"><i class="fa {{ $node->active? 'fa-eye' : 'fa-eye-slash' }}"></i></a>&nbsp;
<a href="{{route('admin.node.edit', [ 'parent' => $node->id ])}}"><i class="fa fa-edit"></i></a>&nbsp;
<a href="{{route('admin.node.create', [ 'parent' => $node->id ])}}"><i class="fa fa-caret-square-o-right"></i></a>&nbsp;
<a href="{{route('admin.node.create', [ 'parent' => $main->id ])}}"><i class="fa fa-caret-square-o-down"></i></a>&nbsp;
<a href="" class="disabled"><i class="fa fa-trash-o"></i></a>